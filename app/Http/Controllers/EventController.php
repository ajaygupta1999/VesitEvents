<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CouncilMember;
use App\Models\Event;
use App\Models\Guest;
use App\Models\Register;
use App\Models\SponserBy;
use App\Models\Takenby;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Twilio\Rest\Client;

class EventController extends Controller
{
    function aboutEvent(){
        DB::beginTransaction();
        $user = User::where('email',session()->get('email'))->first();
        return view('Events/AddEvent',compact(['user']));
    }

    function aboutEventAdd(Request $request){
        $event = new Event();
        $event->name = $request->eventname;
        $event->short_description = $request->short_desc;
        $event->long_description = $request->full_desc;
        $event->category = $request->category;
        $society = CouncilMember::where('email',session()->get('email'))->first();
        $event->society = $society->society_name;
        $imageName = time().''.$request->image->getClientOriginalName();;
        $request->image->move(public_path('event_images'), $imageName);
        $event->profile_image = $imageName;
        $event->time = $request->time;
        $event->date = $request->date;
        $event->save();
        session()->put('event',$event);
        return redirect('addevent/aboutguest');
    }

    function aboutGuest(Request $request){
        $user = User::where('email',session()->get('email'))->first();
        $guests = Guest::all();
        return view('Events/Aboutguest', compact(['guests','user']));
    }

    function aboutGuestAdd(Request $request){
        $guest = new Guest();
        $guest->name = $request->guest_name;
        $guest->email = "xyz";
        $guest->description = $request->short_desc;
        $guest->organization_details = $request->type;
        $guest->position = $request->role;
        $guest->save();
        $event = Event::find($request->event_id);
//      $event->guests()->attach($guest->id);
        $guest->events()->attach($event->id);
        return redirect('addevent/aboutguest');
    }


    function aboutGuestAddExisting(Request $request){
        $event = session()->get('event');
        $event = Event::find($event->id);
        $guest = Guest::find($request->guest_id);
//      $event->guests()->attach($guest->id);
        $guest->events()->attach($event->id);
        return response()->json(['success'=>'Done']);
    }

    function aboutSponsor(){
        $user = User::where('email', session()->get('email'))->first();
        return view('Events/addsponsor',compact(['user']));
    }

    function aboutSponsorAdd(Request $request){
        $event = session()->get('event');
        $company = new Company();
        $imageName = time() . '' . $request->image->getClientOriginalName();;
        $request->image->move(public_path('company_images'), $imageName);
        $company->profile_image = $imageName;
        $company->details =  $request->details;
        $company->save();
        $event->company()->attach($company->id);
        session()->forget('event');
        DB::commit();
        return redirect('/');
    }

    function removeEvent(){
        DB::rollBack();
        session()->forget('event');
        return redirect('/');
    }

    function addEventComplete(){
        session()->forget('event');
        DB::commit();
        return redirect('/');
    }

    function eventPage($id){
        $user = User::where('email',session()->get('email'))->first();
        $event = Event::find($id);
        $guests = Takenby::where('event_id',$id)->get();
        $sponsers = SponserBy::where('event_id',$id)->first();
        $company = Company::find($sponsers->company_id);
        return view('Events/Eachevent' , compact(['user','event','company']));
    }

    function registerAdd($id){
        $user = User::where('email',session()->get('email'))->first();
        // $user->event()->attach($id);
        // $events = Event::where('date',date('Y-m-d'))->get();
        // foreach ($events as $event){
        //     $users_registers = Register::where('event_id',$event->id)
        //        ->where('send_remainder', 0)
        //         ->get();
        //     foreach($users_registers as $users_register){
        //         $user = User::find($users_register->user_id);
                // $users_register->send_remainder = 1;
                // $users_register->save();
                $account_sid = getenv("TWILIO_SID");
                $auth_token = getenv("TWILIO_AUTH_TOKEN");
                $twilio_number = getenv("TWILIO_NUMBER");
                $client = new Client($account_sid, $auth_token);
                $user_phn = "+918291597204";
                $bodytext = "Sms Send from VESITEVENT";
                echo $user_phn." ->> ".$bodytext;
                try{
                    $client->messages->create(
                        $user_phn, 
                        ['from' => $twilio_number, 'body' => $bodytext]);
                        
                }catch (\Exception $e){
                    echo $e;
                }
                
        return redirect('/');
    }
}
