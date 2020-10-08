<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email',"password");
        //return $credentials;
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return view("main-page");
        }
        else
            return view("login");
    }
}
