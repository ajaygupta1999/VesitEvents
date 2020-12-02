<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;


class LoginController extends Controller
{
    //Login page view
    function loginPage(){
        return view('LoginAndRegister/login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email',"password");
        if (Auth::attempt($credentials)) {
            Session::put('email',$request->email);
            return redirect('/');
        }
        else{
            $status = "Wrong Credentials";
            return redirect('/login')->with('status',$status);
        }

    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->stateless()->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        $email = $user->getemail();
        if(User::where('email',$email)->first())
        {
            Session::put('email',$user->email);
            return redirect('/');
        }
//        if(!(preg_match("/^([\d]{4})\.([a-z]+)\.([a-z]+)@(ves)\.(ac)\.(in)$/",$email)))
//        {
//            //     ^([\d]{4})\.([a-z]+)\.([a-z]+)@(ves)\.(ac)\.(in)$
//            //     ^([a-zA-z\d\.]+)@(ves)\.(ac)\.(in)$
//            return "Not ves id";
//        }
        else{
            $user = new User();
            $user->email = $email;
            $user->password = "";
            $user->save();
            Session::put('email',$user->email);
            return redirect('/');
        }
    }

    function logout(){
        session()->forget('email');
        Auth::logout();
        return redirect('/');
    }
}
