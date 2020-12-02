<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class UserController extends Controller
{

    //Main page view
    function mainPage(){
        $societies = \App\Models\Society::all();
        return view('index', compact(['societies']));
    }


    //Society Page view
    function societyPage(Request $request){
        $society = \App\Models\Society::where('name', $request->name)->first();
        return view('Society/society', compact(['society']));
    }

    //Password Reset
    function passwordResetPage(){
        return view('LoginAndRegister/reset_pass');
    }

    function passwordReset(Request $request){
        $email = $request->email;
        $user = User::where('email',$email)->first();
        if($user){
            Mail::to($user->email)->send(new MailController($user,'MailTemplates/password_mail'));
            $status = "Email link has been send.";
            return redirect('/reset')->with('status',$status);
        }
        else{
            $status = "User doest not exist";
            return redirect('/reset')->with('status',$status);
        }
    }

    function newPasswordPage(Request $request, $email){
        $id = User::where('email',$request->email)->first('id');
        return view('LoginAndRegister/new_password',compact(['id']));
    }

    function newPassword(Request $request,$id){
        $user = User::find($id);
        $user->password = bcrypt($request->password);
        $user->save();
        $status = "Password Reset Complete";
        return redirect('/login')->with('status');
    }
}
