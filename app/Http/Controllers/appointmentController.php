<?php

namespace App\Http\Controllers;

use app\Models\appointment;
use Illuminate\Http\Request;

class appointmentController extends Controller
{
    //
    public function appointment(Request $request)
    {
        $data = new appointment;
        $data->name = $request->name;

        $data->name = $request->name;
    }
}
