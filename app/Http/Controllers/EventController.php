<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    function aboutEvent(){
        return view('Events/AddEvent');
    }

    function aboutEventAdd(Request $request){
        $event = new Event();
        $event->name = $request->eventname;
        $event->short_description = $request->short_desc;
        $event->long_description = $request->full_desc;
        $event->category = $request->category;
        $event->time = $request->time;
        $event->date = $request->date;
        $event->save();
        session()->put('event_id',$event->id);
        return redirect('addevent/aboutguest');
    }

    function aboutGuest(Request $request){
        $guests = Guest::all();
        return view('Events/Aboutguest', compact(['guests']));
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

//    function aboutGuestAddExisting($event_id,$guest_id){
//        $event = Event::find($event_id);
//        $guest = Guest::find($guest_id);
////      $event->guests()->attach($guest->id);
//        $guest->events()->attach($event->id);
//        return redirect('addevent/aboutguest');
//    }

    function aboutGuestAddExisting(Request $request){
        $event = Event::find($request->event_id);
        $guest = Guest::find($request->guest_id);
//      $event->guests()->attach($guest->id);
        $guest->events()->attach($event->id);
        return response()->json(['success'=>'Done']);
    }

    function addEventComplete(){
        session()->forget('event_id');
        return redirect('/');
    }
}
