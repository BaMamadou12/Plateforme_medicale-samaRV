<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RendezvousController extends Controller
{
    public function rv(){
        return view("rv");
    }
}
