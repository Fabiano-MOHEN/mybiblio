<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // show register page
    public function register() {
        // afficher la vue register
        return view('auth.register');
    }
    // handle register request
    public function handleRegister(RegisterRequest $request) {

        User::create($request->validated());
        return redirect()->route('login');
    }

    // show login page
    public function login() {
        echo "login page";
     }

    // handle login request
    public function handleLogin() {
        // récupérer les données du formulaire
        // valider les données
        // authentifier l'utilisateur
        // rediriger l'utilisateur vers la page d'accueil

    }
}
