<?php

namespace App\Http\Controllers;

use App\Models\RendezVous;
use App\Models\Consultation;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function index($idM, $idP){

        return view("medecin.consultation", compact('idM', 'idP'));
    }


    public function consultation(Request $request, $idP, $idM){
        $symptomes = '';
        for($i = 1; $i <= $request->size; $i++){
            $sympt = 'sympt'.$i;
            if($request->get($sympt)){
                $symptomes .= $request->get($sympt). ', ';
            }
        }

        $symptomes = substr($symptomes, 0, -2);

        $request->validate([
            'diagnostic' => 'required',
            'observation' => 'required',
        ]);

        Consultation::create([
            'plaintes_Symptomes' => $symptomes,
            'autre_Examens_Para_Clinique' => $request->examen,
            'traitement' =>  $request->traitement,
            'diagnostic' => $request->diagnostic,
            'observations' => $request->observation,
            'id_medecin' => intval($idM),
            'id_patient' => intval($idP),
        ]);

        RendezVous::where('id_medecin', $idM)->where('id_patient', $idP)->update(['statut' => 'valider']);



        

        return redirect()->route('medecin')->with('succes', 'patient(e) consulté(e) avec succées');
    }
}
