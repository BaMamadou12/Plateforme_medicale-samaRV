<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
  public function register(){
      return view('register');
  }
  public function validateInscription(Request $request){

    $validated = $request->validate(
        [
            'nom'=>['required ', 'string','beetwen:2, 25'],
            'prenom'=>['required ', 'string','beetwen:3, 25'],
            'email'=>['required','email','unique:users'],
            'adresse'=>['required ', 'string','beetwen:2, 25'],
            'tel'=>['required ', 'string','digits:9','unique:users'],
            'date'=>['required','string',],
            'lieux'=>['required ', 'string','max:50'],
            'password'=>['required ', 'string','min:8','confirmed'],
        ]
    );

  }
}
