<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\TecnicoController;
use App\Http\Controllers\AsignarServicioController;
use App\Http\Controllers\DetallesServicioController;



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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('clientes', ClienteController::class);
Route::resource('servicios', ServicioController::class);
Route::resource('tecnicos', TecnicoController::class);
Route::resource('asignar-servicios', AsignarServicioController::class);
Route::resource('detalles-servicios', DetallesServicioController::class);



Route::get('/edit2/{id}', [AsignarServicioController::class,'edit2'])->name('edit2');
Route::get('/index_asig', [AsignarServicioController::class,'index_asig'])->name('index_asig');

Route::get('/buscar', [ClienteController::class, 'buscar'])->name('buscar');
Route::get('/resultados', [ClienteController::class, 'resultados'])->name('resultados');

Route::get('/cargar-detalles-servicio/{servicioId}', 'AsignarServicioController@cargarDetallesServicio');
