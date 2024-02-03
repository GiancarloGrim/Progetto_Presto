<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\RevisorController;
use App\Models\Announcement;

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

Route::get('/', [FrontController::class , 'welcome'])->name('home');

Route::get('/nuovo/annuncio', [AnnouncementController::class, 'createAnnouncement'])->middleware('auth')->name('announcements.create');

Route::get('/categoria/category/{category}', [FrontController::class, 'categoryShow'])->name('categoryShow');

Route::get('/dettaglio/annuncio/{announcement}', [AnnouncementController::class, 'showAnnouncement'])->name('announcements.show');

Route::get('/tutti/annunci', [AnnouncementController::class, 'indexAnnouncement'])->name('announcements.index');

//Home revisore
Route::get('/revisor/home', [RevisorController::class,'index'])->middleware('isRevisor')->name('revisor.index');

//Accetta annuncio
Route::patch('/accetta/annuncio/{announcement}', [RevisorController::class,'acceptAnnouncement'])->middleware('isRevisor')->name('revisor.accept_announcement');

//Rifiuta annuncio
Route::patch('/rifiuta/annuncio/{announcement}', [RevisorController::class,'rejectAnnouncement'])->middleware('isRevisor')->name('revisor.reject_announcement');
//
//Richiedi di diventare revisore
Route::get('/richiesta/revisore',[RevisorController::class,'becomeRevisor'])->middleware('auth')->name('become.revisor');

//Rendi utente revisore
Route::get('/rendi/revisore/{user}', [RevisorController::class,'makeRevisor'])->name('make.revisor');

Route::get('/ricerca/annuncio', [FrontController::class, 'searchAnnouncement'])->name('announcements.search'); 

// Cambio lingua
Route::post('/lingua/{lang}' ,[FrontController::class, 'setLanguage'])->name('set_language_locale');
