<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\OrdenesController;
use App\Http\Controllers\ComidaController;

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

Route::get('/loginAdmin', [LoginAdminController::class, 'formAdmin'])->name('loginAdmin');
Route::post('/loginAdmin', [LoginAdminController::class, 'authenticateAdmin'])->name('loginAdmin');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/inventario', [InventarioController::class, 'inventario'])->name('inventario');
Route::get('/facturas', [FacturaController::class, 'facturas'])->name('facturas');
Route::get('/ordenes', [OrdenesController::class, 'ordenes'])->name('ordenes');

Route::post('/dashboard', [ComidaController::class, 'crearComida'])->name('dashboard');






