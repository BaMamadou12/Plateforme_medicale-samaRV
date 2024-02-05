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
//methode qui permet d'ajouter un hopital
public function addhopital(Request $request){

        $validated = $request->validate(
            [
                'nom' => ['required', 'string', 'between:2,255'],
                'adresse'=>['required','string','between:3,255'],
                'email' => ['required', 'email', 'unique:hopitals'],
                'telephone' => ['required', 'string', 'unique:hopitals'],
                'ville' => ['required', 'string'],
                'region' => ['required', 'string'],
            ]
        );
        Hopital::create([
                'nom' => $validated['nom'],
                'ville' => $validated['ville'],
                'email' => $validated['email'],
                'telephone' => $validated['telephone'],
                'adresse'=>$validated['adresse'],
                'region'=>$validated['region'],
        ]

        );

    return redirect()->route('admin')->withSuccesshopital('Ajout de l\'hopital a  réussie avec succès');


}

// fonction qui permet de lister tous les hopitaux ainsi que les medecins
    public function admin():View{
        $list_medecin=Medecin::all();
        $list_hopital=Hopital::all();
        $medecin_actif=Hopital::whereNotNull('id_medecin')->count();
        $medecin_dispo=Medecin::all()->count();
        $nombre_hopitaux=Hopital::all()->count();

        return view('admin.dashboard',compact('list_medecin','list_hopital','medecin_actif','medecin_dispo','nombre_hopitaux'));
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

    public function affecter(Request $request){
        $bool = true;
        try {
            Hopital::find($request->id)->update($request->only('id_medecin'));
        } catch (\PDOException $th) {
            $bool = false;
        }
        
        if($bool){
            return back()->withMsg('affectation reussie !');
        }else{
            return back()->withMsg_error('Médecin Dèja affecté !'); 
        }
    }
    //SUPPRESSION D'UN MEDECIN
    public function delete_medecin($id){

        $medecin = Medecin::find($id);
        $hopitals = Hopital::where('id_medecin', $id)->get();

        // Mettre à null l'id_medecin pour chaque hôpital lié
        foreach ($hopitals as $hopital) {
            $hopital->id_medecin = null;
            $hopital->save();
        }

        // Supprimer le médecin
        $medecin->delete();

        return redirect()->route('admin');
    }


    //SUPPRESSION DIUN HOPITAL
    public function delete_hopital($id){

        $hopital=Hopital::find($id);
        $hopital->delete();
        return redirect()->route('admin');

    }

}
