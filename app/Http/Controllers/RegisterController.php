<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    //
    public function store(Request $request)
    {
        $email = $request['email'];
        $password = bcrypt($request['password']);

        if(DB::table('users')->where('email',$email)->first())
        {
            return "Exists";//Email id used
        }
        if(!(preg_match("/^([\d]{4})\.([a-z]+)\.([a-z]+)@(ves)\.(ac)\.(in)$/",$email)))
        {
            //     ^([\d]{4})\.([a-z]+)\.([a-z]+)@(ves)\.(ac)\.(in)$
            //     ^([a-zA-z\d\.]+)@(ves)\.(ac)\.(in)$
            return "Not ves id";
        }
        $user = new User();
        $user->email = $email;
        $user->password = $password;

        $user->save();
        event(new Registered($user)); //Email Verification
        return redirect()->intended("/");
    }
}
