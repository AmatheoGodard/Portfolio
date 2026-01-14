<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;


// Route::get('/', function () {
//     return view('welcome');
// });

// Page d'accueil du portfolio
Route::get('/', [PortfolioController::class, 'index'])->name('home');

// Envoi du formulaire de contact
Route::post('/contact', [PortfolioController::class, 'sendContact'])->name('contact.send');

// Téléchargement du CV
Route::get('/cv/download', [PortfolioController::class, 'downloadCV'])->name('cv.download');
