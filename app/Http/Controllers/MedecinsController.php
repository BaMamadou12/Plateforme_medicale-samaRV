<?php

namespace App\Http\Controllers;

use App\Models\Medecin;
use App\Models\Patient;
use Illuminate\View\View;
use App\Models\RendezVous;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MedecinsController extends Controller
{
    public function __construct()
    {
        $this->middleware('medecin');
    }

    public  function medecin(Request $request):View{

       $medecin=Auth::guard('medecin')->user();
       $list_rv_matin=\App\Models\RendezVous::with('patient')->where('id_medecin' ,$medecin->id)->Where('heure','matin')->where('statut', 'encours')->get();

        $list_rv_soir=\App\Models\RendezVous::with('patient')->where('id_medecin' ,$medecin->id)->Where('heure','soir')->where('statut', 'encours')->get();

        return \view('medecin.dashboard',compact('list_rv_matin','list_rv_soir'));
    }

    public function edit($id){
        $medecin = Medecin::find($id)->get();
        return view('medecin.edit', compact('medecin'));

    }
}
