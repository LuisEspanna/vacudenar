<?php

use App\Http\Controllers\APIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('v1/genders',            [APIController::class, 'getGender']);

Route::get('v1/vaccines',            [APIController::class, 'getReportVaccines']);

Route::get('v1/users',            [APIController::class, 'getUsers']);

Route::get('v1/users/{id}',            [APIController::class, 'getUser'])->where('id','[0-9]+');

Route::get('v1/appointments',            [APIController::class, 'getAppointments']);

Route::post('v1/users',            [APIController::class, 'createUsers']);
