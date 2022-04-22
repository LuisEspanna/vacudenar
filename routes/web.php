<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;


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
    return redirect('/home');
});


//---------------------------------------------------- TOKEN
Route::get('api/token', function () {
    return csrf_token();
});


Auth::routes();

Route::get('/vacunas', [App\Http\Controllers\HomeController::class, 'vacunasIndex'])->name('vacunas');
Route::post('/vacunas', [App\Http\Controllers\HomeController::class, 'vacunasCreate'])->name('vacunas');

Route::get('/citas', [App\Http\Controllers\HomeController::class, 'citasIndex'])->name('citas');

Route::get('/vacunas/reporte', [App\Http\Controllers\HomeController::class, 'allVacunas']);
Route::get('/vacunas/reporte/{id}', [App\Http\Controllers\HomeController::class, 'reporteVacunas'])->where('id','[0-9]+');

Route::get('/citas/reporte', [App\Http\Controllers\HomeController::class, 'allVacunas']);
Route::get('/citas/reporte/{id}', [App\Http\Controllers\HomeController::class, 'reporteVacunas'])->where('id','[0-9]+');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
