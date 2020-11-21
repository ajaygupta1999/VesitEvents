<?php

namespace App\Http\Controllers;

use App\Models\VerifyUser;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use function PHPUnit\Framework\isEmpty;

class RegisterController extends Controller
{

    function registerPage(){
        return view('register');
    }


    public function register(Request $request)
    {
        $has_user = User::where('email',$request->email)
            ->first();
        if($has_user) {
            $user = $has_user;
            $status = "User already exits. Please Login";
        //    Mail::to($user->email)->send(new MailController($user));
            return redirect('/login')->with('status' , $status);
        }
        else{
            $user = new User();
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();
            $verify_user = new VerifyUser();
            $verify_user->user_id = $user->id;
            $verify_user->token = sha1(time());
            $verify_user->save();
            Mail::to($user->email)->send(new MailController($user,'verify_mail'));
            $status = "Verification Email Send";
            return redirect('/login')->with('status',$status);
        }
    }


    public function verifyUser($token)
    {
        $verifyUser = VerifyUser::where('token', $token)->first();
        if($verifyUser){
            $user = User::where('id',$verifyUser->id)->first();
            if(!$user->isVerified) {
                $user->isVerified = 1;
                $user->save();
                $status = "Your e-mail is verified. You can now login.";
            }
            else {
                $status = "Your e-mail is already verified. You can now login.";
            }
        }
        else {
            return redirect('/login')->with('warning', "Sorry your email cannot be identified.");
        }
        return redirect('/login')->with('status', $status);
    }



//    public function googleStore(Request $request)
//    {
//
//        $email = $request->email;
//        if(DB::table('users')->where('email',$email)->first())
//        {
//            return "Exists";//Email id used
//        }
////        if(!(preg_match("/^([\d]{4})\.([a-z]+)\.([a-z]+)@(ves)\.(ac)\.(in)$/",$email)))
////        {
////            //     ^([\d]{4})\.([a-z]+)\.([a-z]+)@(ves)\.(ac)\.(in)$
////            //     ^([a-zA-z\d\.]+)@(ves)\.(ac)\.(in)$
////            return "Not ves id";
////        }
//        $user = new User();
//        $user->email = $email;
//        $user->save();
//        event(new Registered($user)); //Email Verification
//        return redirect()->intended("/");
//    }
}
