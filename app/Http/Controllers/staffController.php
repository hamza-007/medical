<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\staff;

class staffController extends Controller
{
    //
    public function upload(Request $request)
    {
        $staff = new staff;
        $img = $request->image;
        $imagename = time() . '.' . $img->getClientoriginalExtension();
        $request->image->move('staffimage', $imagename);
        $staff->img = $imagename;
        $staff->matricule = $request->matricule;
        $staff->prenom = $request->prenom;
        $staff->nom = $request->nom;
        $staff->cin = $request->cin;
        $staff->num = $request->num;
        $staff->sexe = $request->sexe;
        $staff->age = $request->age;
        $staff->email = $request->email;
        $staff->adresse = $request->adresse;
        $staff->etude = $request->etude;
        $staff->save();
        return redirect()->back()->with('message', 'Staff added succesfully');
    }
}
