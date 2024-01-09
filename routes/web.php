<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AproposController;
use App\Http\Controllers\HopitalsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MedecinsController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\PharmaciesController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// juste des propostions mai forcement il y'aura des modifications  a effectué

Route::get('/', [AccueilController::class ,'acceuil'])->name('accueil');

Route::get('/Hopital', [HopitalsController::class ,'hopital'])->name('hopital');

Route::get('/Pharmacie', [PharmaciesController::class ,'pharmacie'])->name('pharmacie');

Route::get('/Apropos', [AproposController::class ,'apropos'])->name('apropos');

Route::get('/Connexion', [LoginController::class ,'login'])->name('connexion');

Route::get('/Inscription', [RegisterController::class ,'register'])->name('inscription');

Route::get('/Patient', [PatientsController::class ,'patient'])->name('patient');

Route::get('/Medecin', [MedecinsController::class ,'medecin'])->name('medecin');






