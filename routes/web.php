<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\AccueilController::class , 'show'] )->name('accueil'); // Page d'accueil

Auth::routes(); // Route de connexion

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); //Page de Dashboard
