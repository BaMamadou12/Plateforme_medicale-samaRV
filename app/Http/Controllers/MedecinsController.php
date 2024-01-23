<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MedecinsController extends Controller
{
    public  function medecin():View{

        return \view('medecin.dashboard');
    }
}
