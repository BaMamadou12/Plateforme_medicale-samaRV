<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AccueilController extends Controller
{
    public function acceuil()
    {
        
        
        
       
        return view('index');
    }

    public function test(){
        return view('test');
    }
}
