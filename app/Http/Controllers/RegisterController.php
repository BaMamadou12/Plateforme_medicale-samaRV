<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // seul les visiteurs peuvent acceder a cette page
    public function __construct(){
        $this->middleware('guest');
    }

  public function register(){
      return view('register');
  }
    public function validateInscription(Request $request)
    {
        $validated = $request->validate([
            'nom' => ['required', 'string', 'between:2,25'],
            'prenom' => ['required', 'string', 'between:3,25'],
            'email' => ['required', 'email', 'unique:users'],
            'adresse' => ['required', 'string', 'between:2,255'], //
            'tel' => ['required', 'string', 'digits:9', 'unique:users'],
            'date' => ['required', 'string'],
            'lieux' => ['required', 'string', 'max:50'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
       $validated['password']=Hash::make($validated['password']);

       //creer l'utlisateur
        $user = User::create($validated);

        //authentifier le user
        Auth::login($user);

        return redirect()->route('login')->withSuccess('Inscription réussie');

    }



}
