<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Register extends Controller
{
    public function personalDetails(){
        return view('personalDetailForm');
    }

    public function classAndSocietyDetails(){
        return view('classAndSocietyDetailsForm');
    }
}
