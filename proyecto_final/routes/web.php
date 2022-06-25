<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuxiliarController;

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

// Rutas para manejo de sesión
Auth::routes();

// Rutas para el Administrador
Route::group(['middleware' => 'admin'], function () {
    Route::resource('/usuario', '\App\Http\Controllers\UsuariosController');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas para el Auxiliar de enfermería
Route::group(['middleware' => 'auxiliar'], function () {
    Route::resource('/paciente', '\App\Http\Controllers\PacienteController');
});

Route::resource('/auxiliar', AuxiliarController::class);
