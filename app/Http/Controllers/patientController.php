<?php

namespace App\Http\Controllers;
use App\Models\Patient;

use Illuminate\Http\Request;

class patientController extends Controller
{
    //add new patient function 


    public function AddNewPatient()
    {
        $patient = new patient();
        $patient->nom   = request('nom');
        $patient->prenom  = request('prenom');
        $patient->date  = request('date');
        $patient->age  = request('age');
        $patient->profession  = request('profession');
        $patient->email  = request('email');
        $patient->num1  = request('num1');
        $patient->num2  = request('num2');
        $patient->adresse  = request('adresse');
        $patient->sexe  = request('sexe');
        $patient->groupes  = request('groupes');
        $patient->etat  = request('etat');
        $patient->note  = request('note');
        $patient->save();
    
        return response("succes", 200);
    }
}
