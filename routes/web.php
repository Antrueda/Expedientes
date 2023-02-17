<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\ExpedienteController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users', [UsersController::class, 'index'])->name('users.index');



//Expedientes
Route::get('/expediente', [ExpedienteController::class, 'index'])->name('expediente.index');
Route::get('/expediente/nuevo', [ExpedienteController::class, 'create'])->name('expediente.crear');
Route::post('/expediente/nuevo', [ExpedienteController::class, 'store'])->name('expediente.store');
Route::get('expediente/editar/{modelox}', [ExpedienteController::class, 'edit'])->name('expediente.editar');
Route::put('/expediente/editar/{modelox}', [ExpedienteController::class, 'update'])->name('expediente.update');


//Areas
Route::get('/area', [AreaController::class, 'index'])->name('area.index');
Route::get('/area/nuevo', [AreaController::class, 'create'])->name('area.crear');
Route::post('/area/nuevo', [AreaController::class, 'store'])->name('area.store');
Route::get('area/editar/{modelox}', [AreaController::class, 'edit'])->name('area.editar');
Route::put('/area/editar/{modelox}', [AreaController::class, 'update'])->name('area.update');
Route::get('/area/eliminar/{modelox}', [AreaController::class, 'eliminar'])->name('area.eliminar');
Route::put('/area/eliminar/{modelox}', [AreaController::class, 'destroy'])->name('area.destroy');


//Estados
Route::get('/estado', [EstadoController::class, 'index'])->name('estado.index');
Route::get('/estado/nuevo', [EstadoController::class, 'create'])->name('estado.crear');
Route::post('/estado/nuevo', [EstadoController::class, 'store'])->name('estado.store');
Route::get('estado/editar/{modelox}', [EstadoController::class, 'edit'])->name('estado.editar');
Route::put('/estado/editar/{modelox}', [EstadoController::class, 'update'])->name('estado.update');
Route::get('/estado/eliminar/{modelox}', [EstadoController::class, 'eliminar'])->name('estado.eliminar');
Route::put('/estado/eliminar/{modelox}', [EstadoController::class, 'destroy'])->name('estado.destroy');