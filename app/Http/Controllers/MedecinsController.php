<?php

namespace App\Http\Controllers;

use App\Models\Medecin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class MedecinsController extends Controller
{
    public function __construct()
    {
        $this->middleware('medecin');
    }

    public  function medecin(Request $request):View{


        return \view('medecin.dashboard');
    }
}
