<?php

namespace App\Http\Controllers;

use App\Models\RendezVous;

use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\View\View;

class RendezvousController extends Controller
{
    public function rvtoday(Request $request){
        $soir = $request->input('soir');
        $matin = $request->input('matin');
        $date = DateTime::createFromFormat('d/m/Y', date("d/m/Y"));
        $date_mysql = $date->format('Y-m-d');


        if (($matin == 'on' && $soir == 'on') || ($matin == null && $soir == null)){

            return back()->with('errors','Vous devez faire un choix de creneau avant de valider votre rendez-vous');

        } else {

            $heure = ($matin == 'on') ? 'matin' : 'soir';
            $nombre = RendezVous::whereDate('date', Carbon::today())->count();
            if ($nombre <=30 ){

                RendezVous::create([
                    'heure' => $heure,
                    'id_patient' =>auth()->user()->getAuthIdentifier(),
                    'id_medecin' => 1,
                    'date'=>$date_mysql,
                ]);

                return redirect()->route('rv')->with('success','Votre prise de rendez-vous est prise en compte ');

            }else{
                return back()->with('nombreAtteint','le nombre de consultation journaliere atteinte !!!');
            }


        }
    }



    //Methode pour gerer les methodes de demain

    public function rvdemain(Request $request): \Illuminate\Http\RedirectResponse
    {
        $soir = $request->input('soir');
        $matin = $request->input('matin');
        $date = DateTime::createFromFormat('d/m/Y', date("d/m/Y"));
        $date_demain=$date->modify('+ 1 day');
        $date_mysql = $date_demain->format('Y-m-d');


        if (($matin == 'on' && $soir == 'on') || ($matin == null && $soir == null)){

            return back()->with('errors','Vous devez faire un choix de creneau avant de valider votre rendez-vous');

        } else {

            $heure = ($matin == 'on') ? 'matin' : 'soir';
            $nombre = RendezVous::whereDate('date', Carbon::tomorrow()->addDays(1))->count();
            if ($nombre <=30 ){

                RendezVous::create([
                    'heure' => $heure,
                    'id_patient' => auth()->user()->getAuthIdentifier(),
                    'id_medecin' => 1,
                    'date'=>$date_mysql,
                ]);

                return redirect()->route('rv')->with('success','Votre prise de rendez-vous est prise en compte ');

            }else{
                return back()->with('nombreAtteint','le nombre de consultation journaliere atteinte !!!');
            }


        }

    }


    //methode pour gerer les rendez-vous d'apres demain
    public function rvapres(Request $request){

        $soir = $request->input('soir');
        $matin = $request->input('matin');
        $date = DateTime::createFromFormat('d/m/Y', date("d/m/Y"));
        $date_apresdemain=$date->modify('+ 2 day');
        $date_mysql = $date_apresdemain->format('Y-m-d');


        if (($matin == 'on' && $soir == 'on') || ($matin == null && $soir == null)){

            return back()->with('errors','Vous devez faire un choix de creneau avant de valider votre rendez-vous');

        } else {

            $heure = ($matin == 'on') ? 'matin' : 'soir';
            $nombre = RendezVous::whereDate('date', Carbon::today())->count();
            if ($nombre <=30 ){

                RendezVous::create([
                    'heure' => $heure,
                    'id_patient' => auth()->user()->getAuthIdentifier(),
                    'id_medecin' => 1,
                    'date'=>$date_mysql,
                ]);

                return redirect()->route('rv')->with('success','Votre prise de rendez-vous est prise en compte ');

            }else{
                return back()->with('nombreAtteint','le nombre de consultation journaliere atteinte !!!');
            }


        }

    }


    // la methode qui permet de retourner la vue des rendez-vous
    public function rv():View{
        return view("rv");
    }
}
