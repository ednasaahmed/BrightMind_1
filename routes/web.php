<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\TutMateriaController;
use App\Http\Controllers\DetMateriaController;
use App\Http\Controllers\AcercaDeController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\PerfilAController;
use App\Http\Controllers\PerfilTController;
use App\Http\Controllers\HomeTutController;
use App\Http\Controllers\CalendarTController;

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/materias', [MateriaController::class, 'materias'])->name('materias');
Route::get('/tutmaterias', [TutMateriaController::class, 'tutmaterias'])->name('tutmaterias');
Route::get('/detmaterias', [DetMateriaController::class, 'detmaterias'])->name('detmaterias');
Route::get('/nosotros', [AcercaDeController::class, 'index'])->name('nosotros');
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('/login', [LoginController::class, 'ingresar'])->name('ingresar');
Route::post('/registrar', [RegistrarController::class, 'register'])->name('register');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/registrar', [RegistrarController::class, 'registrar'])->name('registrar');

Route::get('/home', [HomeController::class, 'home'])->middleware('auth')->name('home');
Route::get('/homeTut', [HomeTutController::class, 'homeTut'])->middleware('auth')->name('homeTut');
Route::get('/calendar', [CalendarController::class, 'calendar'])->name('calendar');
Route::get('/calendarT', [CalendarTController::class, 'calendar'])->name('calendarT');
Route::get('/perfila', [PerfilAController::class, 'perfil'])->name('perfila');
Route::get('/perfilt', [PerfilTController::class, 'perfil'])->name('perfilt');


Route::post('/registrar', [RegistrarController::class, 'register'])->name('register');




