<?php

namespace App\Http\Controllers;



use App\Models\Hopital;
use App\Models\Medecin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function __construct(){
        // $this->middleware('auth:admin');
    }

    public function addmedecin(Request $request){
        $validated = $request->validate([
            'nom' => ['required', 'string', 'between:2,25'],
            'prenom' => ['required', 'string', 'between:3,25'],
            'specialite'=>['required','string','between:3,25'],
            'email' => ['required', 'email', 'unique:users'],
            'telephone' => ['required', 'string', 'digits:9', 'unique:medecins'],
            'disponibilite' => ['required', 'string', 'in:oui,non'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $validated['password']=Hash::make($validated['password']);
        //creer le medecin
        Medecin::create([
            'nom' => $validated['nom'],
            'prenom' => $validated['prenom'],
            'specialite' => $validated['specialite'],
            'email' => $validated['email'],
            'telephone' => $validated['telephone'],
            'disponibilite' => $validated['disponibilite'],
            'password' => $validated['password'],
        ]);




        return redirect()->route('admin')->withSuccess('Ajout du medecin a  réussie avec succès');


    }

    public function admin():View{
        $list_medecin=Medecin::all();
        $list_hopital=Hopital::all();

        return view('admin.dashboard',compact('list_medecin','list_hopital'));
    }

    public function medecin(){
        return view("admin.medecin");
    }

    public function hopital(){
        return view("admin.hopital");
    }

    public function edit($id){
        $hopital = Hopital::findOrFail($id);
        return view("admin.edit_hopital", compact('hopital'));
    }

    public function update(Request $request, $id){
        Hopital::find($id)->update($request->all());
        return redirect('admin')->with(['message', 'mise a jour reusssi']);
    }

}
