<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use GuzzleHttp\Client;

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
Route::get('/', function(){
    return view('welcome');
});

Route::get('/landingpage', function(){
    return view('landingpage');
});




/* CONSUMO DE API */
Route::get('/registro', [RegistroController::class, 'formularioRegistro'])->name('registro');
Route::post('/registro', [RegistroController::class, 'registrarUsuario'])->name('registrar-usuario');
