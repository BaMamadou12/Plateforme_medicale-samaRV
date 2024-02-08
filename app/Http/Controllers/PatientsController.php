<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\RendezVous;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PatientsController extends Controller
{


    //Seul ce qui sont connecter a la plateforme peuvent aceder a cette page
    public function __construct(){
        $this->middleware('auth');
    }
    public  function patient():View{

$user =Auth::user();
$info_rv =  $user->rendezvous()->with('medecin.hopital')->get();

        return  view('patient.dashboard',compact('info_rv'));
    }
}
