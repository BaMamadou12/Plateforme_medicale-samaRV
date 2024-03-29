<?php

namespace App\Http\Controllers;

use http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{



    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required','string'],
        ]);


        if (Auth::guard('admin')->attempt($credentials)) {

            return redirect()->route('admin');

        } else if (Auth::guard('web')->attempt($credentials)) {

            return redirect()->route('patient');

        } else if (Auth::guard('medecin')->attempt($credentials)) {

            return redirect()->route('medecin');

        } else {
            // Erreur d'authentification rediriger vers le formulaire de connexion

            return back()->withErrors([
                'email' => 'nom d\'utlisateur erroné',
            ])->onlyInput('email');
        }


    }

    public function login():View{

        return view('auth.login');
    }

    public function logout(){
        if (Auth::guard('web')->check()){
            Auth::guard('web')->logout();
        }
        elseif (Auth::guard('medecin')->check())
        {
            Auth::guard('medecin')->logout();
        }elseif (Auth::guard('admin')->check())
        {
            Auth::guard('admin')->logout();
        }
        return redirect('/');
    }
}
