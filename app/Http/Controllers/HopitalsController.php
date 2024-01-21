<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HopitalsController extends Controller
{
    public function hopital(){
        return view("hopital");
    }
}
