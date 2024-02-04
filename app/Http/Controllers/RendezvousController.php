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
        $heure = $request->input('crenaux');

        $date = DateTime::createFromFormat('d/m/Y', date("d/m/Y"));
        $date_mysql = $date->format('Y-m-d');

        $id_medecin = $request->id_medecin;




        if ($heure == null ){

            return back()->with('errors','Vous devez faire un choix de creneau avant de valider votre rendez-vous');

        } else {



            $nombre = RendezVous::whereDate('date', Carbon::today())->count();
            if ($nombre <=30 ){
                $nombre_rv_parjour = RendezVous::whereDate('date', Carbon::today())->count();
                $rang = $nombre_rv_parjour + 1;

                RendezVous::create([
                    'heure' => $heure,
                    'id_patient' =>auth()->user()->getAuthIdentifier(),
                    'id_medecin' => $id_medecin,
                    'date'=>$date_mysql,
                    'rang'=>$rang,
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

        $heure= $request->input('crenaux');
        $date = DateTime::createFromFormat('d/m/Y', date("d/m/Y"));
        $date_demain=$date->modify('+ 1 day');
        $date_mysql = $date_demain->format('Y-m-d');

        $id_medecin = $request->id_medecin;


        if ($heure == null){

            return back()->with('errors','Vous devez faire un choix de creneau avant de valider votre rendez-vous');

        } else {


            $nombre = RendezVous::whereDate('date', Carbon::tomorrow()->addDays(1))->count();
            if ($nombre <=30 ){
                $nombre_rv_parjour = RendezVous::whereDate('date', Carbon::tomorrow()->addDays(1))->count();
                $rang=$nombre_rv_parjour +1;
                RendezVous::create([
                    'heure' => $heure,
                    'id_patient' => auth()->user()->getAuthIdentifier(),
                    'id_medecin' =>$id_medecin,
                    'date'=>$date_mysql,
                    'rang'=>$rang,
                ]);

                return redirect()->route('rv')->with('success','Votre prise de rendez-vous est prise en compte ');

            }else{
                return back()->with('nombreAtteint','le nombre de consultation journaliere atteinte !!!');
            }


        }

    }


    //methode pour gerer les rendez-vous d'apres demain
    public function rvapres(Request $request){


        $heure = $request->input('crenaux');
        $date = DateTime::createFromFormat('d/m/Y', date("d/m/Y"));
        $date_apresdemain=$date->modify('+ 2 day');
        $date_mysql = $date_apresdemain->format('Y-m-d');

        $id_medecin = $request->id_medecin;


        if ($heure == null){

            return back()->with('errors','Vous devez faire un choix de creneau avant de valider votre rendez-vous');

        } else {

            $nombre = RendezVous::whereDate('date', Carbon::tomorrow()->addDays(2))->count();
            if ($nombre <=30 ){
                $nombre_rv_par_jour = RendezVous::whereDate('date', Carbon::tomorrow()->addDays(2))->count();
                $rang=$nombre_rv_par_jour +1;
                RendezVous::create([
                    'heure' => $heure,
                    'id_patient' => auth()->user()->getAuthIdentifier(),
                    'id_medecin' => $id_medecin,
                    'date'=>$date_mysql,
                    'rang'=> $rang,
                ]);

                return redirect()->route('rv')->with('success','Votre prise de rendez-vous est prise en compte ');

            }else{
                return back()->with('nombreAtteint','le nombre de consultation journaliere atteinte !!!');
            }


        }

    }


    // la methode qui permet de retourner la vue des rendez-vous

    public function rv(Request $request):View{
        $id_medecin=$request->id_medecin;
        return view("patient.rv",compact('id_medecin'));

    }
}
