<?php

namespace App\Http\Controllers;

use App\Models\CouncilMember;
use App\Models\Event;
use App\Models\Society;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class UserController extends Controller
{

    //Main page view
    function mainPage(){
        $societies = \App\Models\Society::all();
        $user = User::where('email',session()->get('email'))->first();
        $ongoing_events = Event::whereDate('date','=',date('Y-m-d'))->get();
        $upcoming_events = Event::whereDate('date','>',date('Y-m-d'))->get();
        return view('index', compact(['societies','user','upcoming_events','ongoing_events']));
    }


    //Society Page view
    function societyPage(Request $request){
        $society = \App\Models\Society::where('name', $request->name)->first();
        $user = User::where('email',session()->get('email'))->first();
        return view('Society/society', compact(['society','user']));
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


    function personalDetailPage(){

        $user = User::where('email',session()->get('temp_email'))->first();
//        session()->forget('email');
        return view('User/personalDetailForm', compact(['user']));
    }

    function personalDetailAdd(Request $request){
        $new_user = User::where('email',session()->get('temp_email'))->first();;
        $new_user->email = session()->get('temp_email');
        $new_user->first_name = $request->firstname;
        $new_user->last_name = $request->lastname;
        $imageName = time().$request->image->extension();
        $request->image->move(public_path('profile_images'), $imageName);
        $new_user->profile_image = $imageName;
        $new_user->phone_number = $request->phonenumber;
        session()->put('new_user',$new_user);
        return redirect('/classdetails');
    }

    function classDetailPage(){
        $user = User::where('email',session()->get('temp_email'))->first();

        return view('User/classAndSocietyDetailsForm', compact(['user']));
    }

    function classDetailAdd(Request $request){
        $new_user = session()->get('new_user');
        $new_user->department = $request->department;
        $new_user->current_year = $request->current_year;
        $new_user->class = $request->class;
        $new_user->roll_no = $request->roll_no;
        if($request->society != "None"){
            $society = Society::where('name',$request->society)->first();
            if ($request->role == "Normal-member"){
                $new_user->society()->attach($society->id);
            }
            else{
                $council_member = new CouncilMember();
                $council_member->first_name = $new_user->first_name;
                $council_member->last_name = $new_user->last_name;
//                $imageName = time().'.'.$request->image->extension();
//                $request->image->move(public_path('profile_images'), $imageName);
//                $council_member->profile_image = $imageName;
                $council_member->phone_number = $new_user->phone_number;
                $council_member->email = $new_user->email;
                $council_member->department = $new_user->department;
                $council_member->password = $new_user->password;
                $council_member->current_year = $new_user->current_year;
                $council_member->class = $new_user->class;
                $council_member->roll_no = $new_user->roll_no;
                $council_member->society_id = $society->id;
                $council_member->society_name = $society->name;
                $council_member->role = $request->role;
                $council_member->save();
            }
        }
        $new_user->save();
        session()->forget('new_user');
        return redirect('/');

    }
}
