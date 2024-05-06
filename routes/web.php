<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\AcercaDeController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrarController;
use App\Http\Controllers\HomeController;

Route::get('/', [IndexController::class, 'index'])->name('index');
#Route::get('/materias', [MateriaController::class, 'index'])->name('materias');
Route::get('/acercade', [AcercaDeController::class, 'index'])->name('acercade');
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('/login', [LoginController::class, 'ingresar'])->name('ingresar');
//Route::get('/login', [LoginController::class, 'logout'])->name('logout');

Route::get('/registrar', [RegistrarController::class, 'registrar'])->name('registrar');
Route::Post('/registrar', [RegistrarController::class, 'register'])->name('register');
Route::get('/home', [HomeController::class, 'home'])->name('home');



