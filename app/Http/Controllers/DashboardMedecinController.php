<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardMedecinController extends Controller
{
    public function index(){
        return view('medecin.dashboard');
    }
}
