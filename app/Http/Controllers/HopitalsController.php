<?php

namespace App\Http\Controllers;

use App\Models\Hopital;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HopitalsController extends Controller
{
    public function hopital(Request $request): View
    {
        // Récupérer les valeurs des filtres depuis la requête GET
        $filtre = $request->input('filtre');
        $filtreNom = $request->input('filtrenom');
        $filtreVille = $request->input('filtreville');

        // Initialisez la variable $hopitaux
        $hopitaux = Hopital::with('medecin');

        //  le filtre par ville
        if ($filtreVille=='ville') {

            $hopitaux = $hopitaux->orderBy('ville', 'asc');


        }

        // Vérifiez le cas où aucun filtre n'est appliqué
        if (!$filtre && !$filtreNom && !$filtreVille) {
            $hopitaux = $hopitaux->paginate(6);
            return view("hopital", compact('hopitaux'));
        }

        // Appliquer le filtre par région
        if ($filtre) {
            $hopitaux = $hopitaux->where('region', $filtre);
        }

        // le filtre par nom
        if ($filtreNom) {
            $hopitaux = $hopitaux->orderBy('nom', 'asc');
        }



        //  récupérer les données filtrées
        $hopitaux = $hopitaux->paginate(6);

        // Retourner la vue avec les données filtrées
        return view("hopital", compact('hopitaux'));
    }
}
