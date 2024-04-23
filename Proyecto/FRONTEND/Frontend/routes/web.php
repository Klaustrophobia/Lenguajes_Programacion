<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MenuController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



//Rutas estaticas
Route::get('/landing', [LandingController:: class, 'landing'])->name('landing');

Route::get('/registro', [RegistroController::class, 'formRegistro'])->name('registro');
Route::post('/registro', [RegistroController::class, 'registrarUsuario'])->name('registro.submit');


Route::get('login', [LoginController::class, 'formLogin'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');

Route::get('/menu', [MenuController::class, 'menu'])->name('menu');


