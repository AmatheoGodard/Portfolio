<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\JuryController;


// Route::get('/', function () {
//     return view('welcome');
// });

// Page d'accueil du portfolio
Route::get('/', [PortfolioController::class, 'index'])->name('home');

// Envoi du formulaire de contact
Route::post('/contact', [PortfolioController::class, 'sendContact'])->name('contact.send');

// Téléchargement du CV
Route::get('/cv/download', [PortfolioController::class, 'downloadCV'])->name('cv.download');

// Routes d'authentification jury
Route::get('/jury/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/jury/login', [AuthController::class, 'login'])->name('login.submit');

// Routes protégées du jury
Route::middleware(['jury'])->group(function () {
    Route::get('/jury/dashboard', [JuryController::class, 'dashboard'])->name('jury.dashboard');
    Route::get('/jury/download/{filename}', [JuryController::class, 'downloadFile'])->name('jury.download');
    Route::get('/jury/download-all', [JuryController::class, 'downloadAll'])->name('jury.downloadAll');
    Route::post('/jury/logout', [AuthController::class, 'logout'])->name('logout');
});