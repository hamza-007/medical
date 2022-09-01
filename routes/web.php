<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\staffController;
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
Route::get('/codestaff', function () {
    return view('codestaff');
});
Route::get('/code', function () {
    return view('code');
});
Route::get('/confirmationStaff', function () {
    return view('confirmationStaff');
});
Route::get('/loginpatient', function () {
    return view('loginpatient');
});
Route::get('/changepassword', function () {
    return view('changepassword');
});

Route::get('/loginstaff', function () {
    return view('loginstaff');
});
Route::get('/forgetpassword', function () {
    return view('forgetpassword');
});
Route::get('/forgetstaff', function () {
    return view('forgetstaff');
});
Route::get('/creation', function () {
    return view('creation');
});
Route::get('/fiche', function () {
    return view('fiche');
});
Route::get('/homedoctor', function () {
    return view('doctor\homedoctor');
});
Route::get('/PatientDoctor', function () {
    return view('doctor\PatientDoctor');
});

Route::get('/finance', function () {
    return view('doctor\finance');
});
Route::get('/addStaff', function () {
    return view('doctor\addStaff');
});
Route::get('/messagesdoctor', function () {
    return view('doctor\messagesdoctor');
});
Route::get('/dossierPatient', function () {
    return view('doctor\dossierPatient');
});

Route::get('/planingdoctor', function () {
    return view('doctor\planingdoctor');
});
Route::get('/SettingDoctor', function () {
    return view('doctor\SettingDoctor');
});
Route::get('/StatDoctor', function () {
    return view('doctor\StatDoctor');
});
Route::get('/TasksDoctor', function () {
    return view('doctor\TasksDoctor');
});
Route::get('/confirm', function () {
    return view('patient\homePatient');
});
Route::get('/homePatient', function () {
    return view('patient\homePatient');
});
Route::get('/MessagesPatient', function () {
    return view('patient\MessagesPatient');
});
Route::get('/PlaningPatient', function () {
    return view('patient\PlaningPatient');
});
Route::get('/ProfilePatient', function () {
    return view('patient\ProfilePatient');
});
Route::get('/scd', function () {
    return view('patient\scd');
});
Route::get('/SettingPatient', function () {
    return view('patient\SettingPatient');
});
Route::get('/statPatient', function () {
    return view('patient\statPatient');
});
Route::get('/tasksPatient', function () {
    return view('patient\tasksPatient');
});
Route::get('/confirm', function () {
    return view('staff\homeStaff');
});
Route::get('/ficheStaff', function () {
    return view('staff\ficheStaff');
});
Route::get('/homeStaff', function () {
    return view('staff\homeStaff');
});
Route::get('/messagesStaff', function () {
    return view('staff\messagesStaff');
});
Route::get('/PatientStaff', function () {
    return view('staff\PatientStaff');
});
Route::get('/staff', function () {
    return view('staff\staff');
});
Route::get('/SettingStaff', function () {
    return view('staff\SettingStaff');
});
Route::get('/planingStaff', function () {
    return view('staff\planingStaff');
});
Route::get('/taskStaff', function () {
    return view('staff\taskStaff');
});
Route::get('/Dossier', function () {
    return view('staff\Dossier');
});
Route::get('/doctor/Dossier', function () {
    return view('staff\Dossier');
});
Route::get('/singin', function () {
    return view('staff\homestaff');
});
Route::post('/upload_staff', [staffController::class, 'upload']);
Route::post('/appointment', [appointmentController::class, 'appointment']);
