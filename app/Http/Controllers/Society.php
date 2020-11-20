<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Society extends Controller
{
     public function index() {
         return view("society"); 
     }
}
