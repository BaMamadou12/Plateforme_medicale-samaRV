<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\RendezvousController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AproposController;
use App\Http\Controllers\HopitalsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MedecinsController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\PharmaciesController;
use App\Http\Controllers\RegisterController;


Route::get('/', [AccueilController::class ,'acceuil'])->name('accueil');

Route::get('/hopital', [HopitalsController::class ,'hopital'])->name('hopital');

Route::get('/pharmacie', [PharmaciesController::class ,'pharmacie'])->name('pharmacie');

Route::get('/apropos', [AproposController::class ,'apropos'])->name('apropos');

Route::get('/login', [LoginController::class ,'login'])->name('login');
Route::post('/login',[LoginController::class , 'authenticate'])->name('authenticate');
Route::post('/logout',[LoginController::class , 'logout'])->name('logout');


Route::get('/register', [RegisterController::class ,'register'])->name('register');
Route::post('/register',[RegisterController::class,'validateInscription']);

Route::get('/patient', [PatientsController::class ,'patient'])->name('patient');

Route::get('/medecin', [MedecinsController::class ,'medecin'])->name('medecin');

Route::get('/rv', [RendezvousController::class ,'rv'])->name('rv');
Route::post('/rv_today',[RendezvousController::class,'rvtoday']);

Route::post('/rv_apres',[RendezvousController::class,'rvapres'])->name('rv_apres');
Route::post('/rv_demain', [RendezvousController::class, 'rvdemain'])->name('rv_demain');



//route pour l'admin
Route::get('/admin', [AdminController::class ,'admin'])->name('admin');

Route::get('/consultation', [ConsultationController::class ,'index'])->name('consultation');

//route de deconnexion















