<?php

use App\Http\Middleware\CheckRV;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AproposController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\HopitalsController;
use App\Http\Controllers\MedecinsController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PharmaciesController;
use App\Http\Controllers\RendezvousController;
use App\Http\Controllers\ConsultationController;



Route::get('/', [AccueilController::class ,'acceuil'])->name('accueil');
Route::get('/demandes', [DemandeController::class ,'create'])->name('d.create');
Route::post('/demandes', [DemandeController::class ,'store'])->name('d.store');

Route::get('/hopital', [HopitalsController::class ,'hopital'])->name('hopital');

Route::get('/pharmacie', [PharmaciesController::class ,'pharmacie'])->name('pharmacie');

Route::get('/apropos', [AproposController::class ,'apropos'])->name('apropos');

Route::get('/auth/login', [LoginController::class ,'login'])->name('login');
Route::post('/auth/login',[LoginController::class , 'authenticate'])->name('authenticate');
Route::get('/auth/logout',[LoginController::class , 'logout'])->name('logout');


Route::get('/auth/register', [RegisterController::class ,'register'])->name('register');
Route::post('/auth/register',[RegisterController::class,'validateInscription']);




Route::get('/medecin', [MedecinsController::class ,'medecin'])->name('medecin');
Route::get('/medecin/edit/{id}', [MedecinsController::class ,'edit'])->name('medecin.edit');
Route::put('/medecin/update/{id}', [MedecinsController::class ,'update'])->name('medecin.update');
Route::put('/medecin/updatepassword/{id}', [MedecinsController::class ,'updatepassword'])->name('update.password');


Route::get('/patient', [PatientsController::class ,'patient'])->name('patient');
Route::get('/patient/edit/{id}', [PatientsController::class ,'edit'])->name('patient.edit');
Route::put('/patient/update/{id}', [PatientsController::class ,'update'])->name('patient.update');
Route::put('/patient/updatepassword/{id}', [PatientsController::class ,'updatepassword'])->name('changer.password');

Route::get('/patient/rv', [RendezvousController::class ,'rv'])->name('rv');
Route::post('/patient/rv_today',[RendezvousController::class,'rvtoday'])->name('rv_today');
Route::post('/patient/rv_apres',[RendezvousController::class,'rvapres'])->name('rv_apres');
Route::post('/patient/rv_demain', [RendezvousController::class, 'rvdemain'])->name('rv_demain');



//route pour l'admin
Route::get('/admin', [AdminController::class ,'admin'])->name('admin');
Route::get('/admin/medecin', [AdminController::class ,'medecin'])->name('admin.medecin');
Route::post('/admin/medecin', [AdminController::class ,'addmedecin'])->name('admin.addmedecin');
Route::put('/admin/affecter', [AdminController::class ,'affecter'])->name('affecter');
Route::delete('/admin/medecin/{id}',[AdminController::class,'delete_medecin'])->name('delete_medecin');



Route::get('/admin/hopital', [AdminController::class ,'hopital'])->name('admin.hopital');
Route::post('/admin/hopital', [AdminController::class ,'addhopital'])->name('admin.addhopital');
Route::get('/admin/hopital/edit/{id}', [AdminController::class ,'edit'])->name('admin.hopital.edit');
Route::put('/admin/hopital/update/{id}', [AdminController::class ,'update'])->name('admin.hopital.update');
Route::delete('/admin/hopital/{id}',[AdminController::class,'delete_hopital'])->name('delete_hopital');




Route::get('/consultation/{idP}/{idM}', [ConsultationController::class ,'index'])->name('consultation');
Route::post('/consultation/{idP}/{idM}',[ConsultationController::class,'consultation'])->name('consultation');




//route de deconnexion















