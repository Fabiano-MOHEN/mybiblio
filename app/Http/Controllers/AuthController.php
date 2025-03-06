<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // show register page
    public function register()
    {
        // afficher la vue register
        return view('auth.register');
    }
    // handle register request
    public function handleRegister(RegisterRequest $request)
    {

        User::create($request->validated());
        return redirect()->route('login');
    }


    public function login()
    {
        return view('auth.login');
    }

    // show login page
    public function handlelogin(LoginRequest $request)
    {

        // Authentication passed...
        $validated = $request->validated();
        $ok = Auth::attempt($validated);
        if ($ok) {
            session()->regenerate();
        }

        return redirect()->route('home');
    }



    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
