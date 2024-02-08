<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Patient;
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
}
