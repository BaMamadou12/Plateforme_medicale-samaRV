<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Patient;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use App\Models\RendezVous;
use App\Models\Consultation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientsController extends Controller
{


    //Seul ce qui sont connecter a la plateforme peuvent aceder a cette page
    public function __construct(){
        $this->middleware('auth');
    }
    public  function patient():View{
        $id =Auth::user()->id;
        $info_rv =  Rendezvous::where('id_patient', $id)->where('statut', 'encours')->get();
        $consultations = Consultation::where('id_patient', $id)->get();
        // dd($consultations);
        return  view('patient.dashboard',compact('info_rv', 'consultations'));
    }

    public function edit($id){
        $patient = User::find($id);
        return view('patient.edit', compact('patient'));
    }
    public function update(Request $request,$id){


        $data=[
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'email'=>$request->email,
            'tel'=>$request->tel,
            'adresse'=>$request->adresse,
            'lieux'=>$request->lieux,
            'date'=>$request->date,

        ];
        User::find($id)->update($data);

        return redirect()->route('patient.edit',$id);
    }
    public function updatepassword(Request $request,$id){

        $validated=$request->validate([
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]
        );
        $validated['password']=Hash::make($validated['password']);
        $data=[
            'password' => $validated['password']
        ];
        User::find($id)->update($data);
        return redirect()->route('patient.edit',$id);
    }
}
