<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddEvent extends Controller
{
    public function aboutEvent(){
        return view('AddEvent');
    }

    public function aboutGuest() {
        return view('Aboutguest');
    }
}
