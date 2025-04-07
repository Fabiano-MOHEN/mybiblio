<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;


use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, "index" ])->name("home");


// auth routes

Route::get('/register', [AuthController::class, "register" ])->name("register")->middleware("guest");
Route::post('/register', [AuthController::class, "handleRegister" ])->name("register.post")->middleware("guest");

Route::get('/login', [AuthController::class, "login" ])->name("login")->middleware("guest");
Route::post('/login', [AuthController::class, "handleLogin" ])->name("login.post")->middleware("guest");

Route::delete('/logout', [AuthController::class, "logout" ])->name("logout")->middleware("auth");

//Route::resource('books', BookController::class);

Route::get('/books', [BookController::class, "index" ])->name("books.index")->middleware("auth");
Route::get('/books/create', [BookController::class, "create" ])->name("books.create")->middleware("auth");
Route::post('/books/store', [BookController::class, "store" ])->name("books.index")->middleware("auth");



