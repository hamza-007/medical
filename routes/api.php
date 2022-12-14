<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Patient;
use App\Http\Controllers\patientController;
use App\Http\Controllers\staffController;
use App\Models\staff;

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

Route::prefix('/patient')->group(function () {
    Route::post("/add", 'App\Http\Controllers\patientController@AddNewPatient');
    Route::get("/{id}", 'App\Http\Controllers\patientController@getPatientById');
    Route::get("/all", 'App\Http\Controllers\patientController@getAllPatients');
    Route::delete("/delete/{id}", 'App\Http\Controllers\patientController@deletePatient');
    Route::post("/update/{id}", 'App\Http\Controllers\patientController@UpdatePatient');
});

Route::post("/sign-in", function () {
    $username = request("username");
    $password = request("password");
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
