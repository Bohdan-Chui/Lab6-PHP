<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Patient;
use \App\Models\Doctor;

class HospitalController extends Controller
{

    public function home(){
        return view('home');
    }

    public function patients(){
        $patients=Patient::all();
        return view("patients")->with("patients", $patients);
    }

    public function patient($id){
        $patient=Patient::find($id);
        return view("patient")->with("patient", $patient);;
    }

    public function doctors(){
        $doctors=Doctor::all();
        return view("doctors")->with("doctors", $doctors);
    }

    public function doctor($id){
        $doctor=Doctor::find($id);
        return view("doctor")->with("doctor", $doctor);;
    }

}
