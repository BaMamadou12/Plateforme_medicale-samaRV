<?php

namespace App\Http\Controllers;


use Illuminate\View\View;

class AdminController extends Controller
{



    public function admin():View{

        return view('admin.dashboard');
    }

    public function medecin(){
        return view("admin.medecin");
    }
}
