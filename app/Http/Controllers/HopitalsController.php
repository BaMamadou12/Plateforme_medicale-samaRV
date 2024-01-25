<?php

namespace App\Http\Controllers;

use App\Models\Hopital;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HopitalsController extends Controller
{
    public function hopital( Request $request):View{
        $request=Hopital::all();
        return view("hopital",compact('request'));
    }
}
