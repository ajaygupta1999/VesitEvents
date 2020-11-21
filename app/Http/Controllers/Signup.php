<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Signup extends Controller
{
    public function index() {
        return view('signup');
    }
}
