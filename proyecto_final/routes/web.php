<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\FluidController;

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

Route::get('api', [ApiController::class, 'index'])->name('api');

Route::get('cuadro',[FluidController::class, 'index'])->name('fluids.index');
Route::post('cuadro/creado', [FluidController::class, 'store'])->name('fluids.store');

// Route::resource('/', '\App\Http\Controllers\ProductosController');