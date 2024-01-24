<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PatientsController extends Controller
{

    //Seul ce qui sont connecter a la plateforme peuvent aceder a cette page
    public function __construct(){
        $this->middleware('auth');
    }
    public  function patient():View{

        return  view('patient.dashboard');
    }
}
