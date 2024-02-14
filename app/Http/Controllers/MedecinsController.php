<?php

namespace App\Http\Controllers;

use App\Models\Medecin;
use App\Models\Patient;
use Illuminate\View\View;
use App\Models\RendezVous;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MedecinsController extends Controller
{
    public function __construct()
    {
        $this->middleware('medecin');
    }

    public  function medecin(Request $request):View{

       $medecin=Auth::guard('medecin')->user();
       $list_rv_matin=\App\Models\RendezVous::with('patient')->where('id_medecin' ,$medecin->id)->Where('heure','matin')->where('statut', 'encours')->get();

        $list_rv_soir=\App\Models\RendezVous::with('patient')->where('id_medecin' ,$medecin->id)->Where('heure','soir')->where('statut', 'encours')->get();

        return \view('medecin.dashboard',compact('list_rv_matin','list_rv_soir'));
    }

    public function edit($id){
        $medecin = Medecin::find($id);
        return view('medecin.edit', compact('medecin'));

    }
    public function update(Request $request ,$id){



        $data=[
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'specialite' => $request->specialite,
        ];

        Medecin::find($id)->update($data);
        return redirect()->route('medecin.edit',$id);
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

        Medecin::find($id)->update($data);
        return redirect()->route('medecin.edit',$id);
    }
}
