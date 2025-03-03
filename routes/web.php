<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, "index" ])->name("home");


// auth routes

Route::get('/register', [AuthController::class, "register" ])->name("register");
Route::post('/register', [AuthController::class, "handleRegister" ])->name("register.post");

Route::get('/login', [AuthController::class, "login" ])->name("login");


