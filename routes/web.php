<?php

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
    return view('indexe');
});

require __DIR__ . '/auth.php';
Route::get('/welcomepatient', function () {
    return view('welcomep');
});
Route::get('/staff', function () {
    return view('staff');
});
Route::get('/index', function () {
    return view('index');
});

Route::get('/loginpatient', function () {
    return view('loginpatient');
});

Route::get('/loginstaff', function () {
    return view('loginstaff');
});

Route::get('/sign', function () {
    return view('creation');
});
Route::get('/fiche', function () {
    return view('fiche');
});
