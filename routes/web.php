<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, "index" ])->name("home");


// auth routes

Route::get('/register', [AuthController::class, "register" ])->name("register")->middleware("guest");
Route::post('/register', [AuthController::class, "handleRegister" ])->name("register.post")->middleware("guest");

Route::get('/login', [AuthController::class, "login" ])->name("login")->middleware("guest");
Route::post('/login', [AuthController::class, "handleLogin" ])->name("login.post")->middleware("guest");

Route::delete('/logout', [AuthController::class, "logout" ])->name("logout")->middleware("auth");





