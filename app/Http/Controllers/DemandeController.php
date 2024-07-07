<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;

class DemandeController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
   
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('demandes');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'cout' => ['required', 'numeric'],
                'card_recto' => 'required|image',
                'card_verso' => 'required|image',
                'domicile' => 'required|image',
                'dossier_medical' => 'required|image',
                'id_patient' => 'required'
                
            ]
        );

        $recto = time() . '.'. request()->card_recto->getClientOriginalExtension();
        request()->card_recto->move(public_path('images/demandes'), $recto);

        $verso = time() . '.'. request()->card_verso->getClientOriginalExtension();
        request()->card_verso->move(public_path('images/demandes'), $verso);

        $domicile = time() . '.'. request()->domicile->getClientOriginalExtension();
        request()->domicile->move(public_path('images/demandes'), $domicile);

        $dossier_medical = time() . '.'. request()->dossier_medical->getClientOriginalExtension();
        request()->dossier_medical->move(public_path('images/demandes'), $dossier_medical);


        Demande::create([
                'cout' => $validated['cout'],
                'card_recto' => $recto,
                'card_verso' => $verso,
                'domicile' => $domicile,
                'dossier_medical'=>$dossier_medical,
                'id_patient' => $validated['id_patient']
        ]);

        return redirect()->route('accueil')->with('success','Votre a été soumise avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
