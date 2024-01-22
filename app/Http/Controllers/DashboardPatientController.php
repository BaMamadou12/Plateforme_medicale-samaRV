<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardPatientController extends Controller
{
    public function index(){
        return view('dashboard');
    }
}
