<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function index($idM, $idP){

        return view("medecin.consultation", compact('idM', 'idP'));
    }


    public function consultation(Request $request, $idM, $idP){
        $symptomes = '';
        for($i = 1; $i <= $request->size; $i++){
            $sympt = 'sympt'.$i;
            if($request->get($sympt)){
                $symptomes .= $request->get($sympt). ', ';
            }
        }

        $symptomes = substr($symptomes, 0, -2);

        // dd($symptomes);
        dd($request->observation);

        

    }
}
