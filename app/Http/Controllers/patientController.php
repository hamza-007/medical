<?php

namespace App\Http\Controllers;

use App\Models\Patient;

use Illuminate\Http\Request;

class patientController extends Controller
{
    //add new patient

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

    // update patient by id
    public function UpdatePatient($id)
    {
        $patient = patient::find($id);

        //handle not found error
        if (!isset($patient)){
            return response("not found (bad request)",403);
        }

        $patient->nom = request('nom');
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
        
        return response('patient modifier ! ', 200);
    }

    //delete patient by id
    public function deletePatient($id)
    {
        $patient = patient::find($id);
        if(!isset($patient)){
            return response("patient not found",403);
        }
        $patient->delete();
        return response('patient supprime', 200);
    }

    // list of all patients
    public function getAllPatients()
    {
        return patient::all();
    }
    //get patient by id
    public function getPatientById($id)
    {
        $patient = patient::find($id);
        if(!isset($patient)){
            return response("patient not found");
        }
        return response($patient,200);
    }


}
