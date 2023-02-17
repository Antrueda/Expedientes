<?php

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

Route::get('/expediente', [ExpedienteController::class, 'index'])->name('expediente.index');
Route::get('/expediente/nuevo', [ExpedienteController::class, 'create'])->name('expediente.crear');
Route::post('/expediente/nuevo', [ExpedienteController::class, 'store'])->name('expediente.store');


//Route::get('/expediente/editar/{modelox}', [ExpedienteController::class, 'edit'])->name('expediente.editar');
Route::get('expediente/editar/{modelox}', [ExpedienteController::class, 'edit'])->name('expediente.editar');
Route::put('/expediente/editar/{modelox}', [ExpedienteController::class, 'update'])->name('expediente.update');