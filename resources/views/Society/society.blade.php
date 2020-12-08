@include('/partials/header')
@include('/partials/navbar')

	    {{-- <div class="socirty-intro-div">
	    	<div class="row">
	    		<div class="col-md-8">
	    			<div class="society-intro-main-div d-flex flex-column">
	    				<div class="society-background-img">
	    					<img src="{{ url('/asserts/society-background.png') }}">
	    				</div>
	    				<div class="socirty-logo-session">
	    					<img src="{{ url('/asserts',$society->image) }}">
	    				</div>
	    				<div class="socirty-description-session">
	    					<h4>{{$society->name}} Society</h4>
	    					<p class="society-page-description">
                                {{$society->description}}
	    					</p>
	    					<p class="socirty-total-employees">
	    						{{$society->total_members}} Employees
	    					</p>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="col-md-4">
	    		</div>
	    	</div>
        </div> --}}
        <div class="each-society-information d-flex justify-content-center">
            <div class="society-details-society-page d-flex flex-column">
                <div class="society-img-session">
                    <img src="{{ url('/asserts',$society->image) }}" style="width:130px; height:130px; object-fit:cover;">
                </div>
                <h4>{{$society->name}} Society</h4>
                <p> {{$society->description}} </p>
                <div class="button-session">
                    <button class="btn btn-sm btn-light"><i class="fas fa-users"></i> {{$society->total_members}} Employees </button>
                </div>

            </div>
        </div>



        <ul class="nav nav-pills mb-3 society-nav-session" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Events</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Society Members</a>
            </li>
          </ul>
          <div class="tab-content all-event-details-tab container-fluid" id="pills-tabContent">
            <div class="event-div-session tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                    <div class="col-3">
                      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">On Going Details</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Upcoming Events</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Event History</a>
                      </div>
                    </div>
                    <div class="col-9">
                      <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="event-details">
                                <h2 class="event-detail-title">Todays Event</h2>
                                <hr/>
                                <div class="all-event-cards">
                                    <div class="row">
                                        @foreach($ongoing_events as $ongoing_event)
                                        <div class="col-3">
                                            <div class="each-event-card d-flex flex-column">
                                                <div class="today-event-img-session">
                                                    <img width="150px" src="{{ url('/event_images/'.$ongoing_event->profile_image) }}" alt="">
                                                </div>
                                                <div class="event-text-details">
                                                    <p class="event-title">{{$ongoing_event->name}}</p>
                                                    <p class="date-and-time">
                                                        <span><i class="far fa-calendar-alt"></i>{{$ongoing_event->date}}</span>
                                                        <span><i class="far fa-clock"></i> {{$ongoing_event->time}}</span>
                                                    </p>
                                                    <a id="each-event-register-button"  class="btn btn-md btn-success" href="{{url('event/'.$ongoing_event->id)}}">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="event-details">
                                <h2 class="event-detail-title">Upcoming Event</h2>
                                <hr/>
                                <div class="all-event-cards">
                                    <div class="row">
                                        @foreach($upcoming_events as $upcoming_event)
                                        <div class="col-3">
                                            <div class="each-event-card d-flex flex-column">
                                                <div class="today-event-img-session">
                                                    <img  width="150px" src="{{ url('/event_images/'.$upcoming_event->profile_image) }}" alt="">
                                                </div>
                                                <div class="event-text-details">
                                                    <p class="event-title">{{$upcoming_event->name}}</p>
                                                    <p class="date-and-time">
                                                        <span><i class="far fa-calendar-alt"></i> {{$upcoming_event->date}}</span>
                                                        <span><i class="far fa-clock"></i> {{$upcoming_event->time}}</span>
                                                    </p>
                                                    <a id="each-event-register-button"  class="btn btn-md btn-success" href="{{url('event/'.$upcoming_event->id)}}">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <div class="event-details">
                                <h2 class="event-detail-title">All Event History</h2>
                                <hr/>
                                <div class="all-event-cards">
                                    <div class="row">
                                        <div class="col-3">
                                            @foreach($past_events as $past_event)
                                            <div class="each-event-card d-flex flex-column">
                                                <div class="today-event-img-session">
                                                    <img width="150px" src="{{ url('/event_images/'.$past_event->profile_image) }}" alt="">
                                                </div>
                                                <div class="event-text-details">
                                                    <p class="event-title">{{$past_event->name}}</p>
                                                    <p class="date-and-time">
                                                        <span><i class="far fa-calendar-alt"></i> {{$past_event->date}}</span>
                                                        <span><i class="far fa-clock"></i> {{$past_event->time}}</span>
                                                    </p>
                                                    <a id="each-event-register-button"  class="btn btn-md btn-success" href="{{url('event/'.$past_event->id)}}">View Details</a>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="All-Members-details">
                    <center><h2 class="all-member-header">All Members Details</h2><center>
                    <div class="council-heads">
                        <h5>Council Heads</h5>
                        <div class="card" style="width: 18rem;">
                            <img src="{{ url('/asserts/userprofileimg.png') }}" class="card-img-top" alt="..." style="width : 100%; height : 250px; object-fit:cover">
                            <div class="card-body">
                                @php
                                $head = $society_members->where('role','head')->first();
                                @endphp
                                @if($head)
                              <p class="card-text">{{$head->name}}</p>
                              <p class="card-text">{{$head->email}}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="council-members container">
                        <center><h5 id="all-memeber-session">All Council Members</h5><center>
                        <div class="row">
                            @foreach($society_members as $society_member)
                                @php
                                $member = \App\Models\User::where('email',$society_member->email)->first()
                                @endphp
                            <div class="col-4">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ url('/profile_images/'.$member->profile_image) }}" class="card-img-top" alt="..." style="width : 100%; height : 250px; object-fit:cover">
                                    <div class="card-body">
                                      <p class="card-text">{{$member->name}}</p>
                                      <p class="card-text">{{$member->email}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

          </div>






        {{-- <div class="d-flex justify-content-center align-items-center">
            <h4 class="my-ongoing-title-index-page">On Going Events</h4>
        </div>
        <div class="MY-on-going-evenets-session">
            @for($i=0;$i<sizeof($ongoing_events);$i = $i+3)
                <div class="row">
                    @if($i>=sizeof($ongoing_events))
                        @break;
                    @endif
                    <div class="col-12 col-md-4">
                        <div class="each-event-container">
                            <div class="img-session">
                                <img src="{{url('/event_images/'.$ongoing_events[$i]->profile_image)  }}" alt="event-img">
                            </div>
                            <div class="content-session">
                                <div class="upper-content d-flex flex-column">
                                    <p class="main-title">{{$ongoing_events[$i]->name}}</p>
                                    <p class="short-desc">{{$ongoing_events[$i]->short_description}}</p>
                                    @php
                                        $guests_ids = \App\Models\Takenby::where('event_id',$ongoing_events[$i]->id)->get('guest_id');
                                    @endphp
                                    <p class="guest-text"><span>Guest:</span>
                                        @foreach($guests_ids as $guest_id)
                                            @php
                                                $guest = \App\Models\Guest::find($guest_id)->first();
                                            @endphp
                                            {{$guest->name}},
                                        @endforeach
                                    </p>
                                    <div class="date-time-div d-flex justify-content-start align-items-center">
                                        <p class="date-session"><span><i class="far fa-calendar-alt"></i></span>{{$ongoing_events[$i]->date}}</p>
                                        <p><span><i class="far fa-clock"></i></span> {{$ongoing_events[$i]->time}}</p>
                                    </div>
                                    <p class="event-countdown-p"><span>Event start in:<span> {{$ongoing_events[$i]->date}} </p>
                                    <div class="register-button-div">
                                        <button id="each-event-register-button" class="btn btn-md btn-primary">Register</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($i+1>=sizeof($ongoing_events))
                        @break;
                    @endif
                    <div class="col-12 col-md-4">
                        <div class="each-event-container">
                            <div class="img-session">
                                <img src="{{ url('/event_images/'.$ongoing_events[$i+1]->profile_image) }}" alt="event-img">
                            </div>
                            <div class="content-session">
                                <div class="upper-content d-flex flex-column">
                                    <p class="main-title">{{$ongoing_events[$i+1]->name}}</p>
                                    <p class="short-desc">{{$ongoing_events[$i+1]->short_description}}</p>
                                    @php
                                        $guests_ids = \App\Models\Takenby::where('event_id',$ongoing_events[$i+1]->id)->get('guest_id');
                                    @endphp
                                    <p class="guest-text"><span>Guest:</span>
                                        @foreach($guests_ids as $guest_id)
                                            @php
                                                $guest = \App\Models\Guest::find($guest_id)->first();
                                            @endphp
                                            {{$guest->name}},
                                        @endforeach
                                    </p>
                                    <div class="date-time-div d-flex justify-content-start align-items-center">
                                        <p class="date-session"><span><i class="far fa-calendar-alt"></i></span>{{$ongoing_events[$i+1]->date}}</p>
                                        <p><span><i class="far fa-clock"></i></span> {{$ongoing_events[$i+1]->time}}</p>
                                    </div>
                                    <p class="event-countdown-p"><span>Event start in:<span> {{$ongoing_events[$i+1]->date}} </p>
                                    <div class="register-button-div">
                                        <button id="each-event-register-button" class="btn btn-md btn-primary">Register</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($i+2>=sizeof($ongoing_events))
                        @break;
                    @endif
                    <div class="col-12 col-md-4">
                        <div class="each-event-container">
                            <div class="img-session">
                                <img src="{{ url('/event_images/'.$ongoing_events[$i+2]->profile_image) }}" alt="event-img">
                            </div>
                            <div class="content-session">
                                <div class="upper-content d-flex flex-column">
                                    <p class="main-title">{{$ongoing_events[$i+2]->name}}</p>
                                    <p class="short-desc">{{$ongoing_events[$i+2]->short_description}}</p>
                                    @php
                                        $guests_ids = \App\Models\Takenby::where('event_id',$ongoing_events[$i+2]->id)->get('guest_id');
                                    @endphp
                                    <p class="guest-text"><span>Guest:</span>
                                        @foreach($guests_ids as $guest_id)
                                            @php
                                                $guest = \App\Models\Guest::find($guest_id)->first();
                                            @endphp
                                            {{$guest->name}},
                                        @endforeach
                                    </p>
                                    <div class="date-time-div d-flex justify-content-start align-items-center">
                                        <p class="date-session"><span><i class="far fa-calendar-alt"></i></span>{{$ongoing_events[$i+2]->date}}</p>
                                        <p><span><i class="far fa-clock"></i></span> {{$ongoing_events[$i+2]->time}}</p>
                                    </div>
                                    <p class="event-countdown-p"><span>Event start in:<span> {{$ongoing_events[$i+2]->date}} </p>
                                    <div class="register-button-div">
                                        <button id="each-event-register-button" class="btn btn-md btn-primary">Register</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
        </div>

        <div class="d-flex justify-content-center align-items-center">
            <h4 class="my-upcoming-title">Upcoming Events</h4>
        </div>
        <div class="MY-on-going-evenets-session">
            @for($i=0;$i<sizeof($upcoming_events);$i = $i+3)
                <div class="row">
                    @if($i>=sizeof($upcoming_events))
                        @break;
                    @endif
                    <div class="col-12 col-md-4">
                        <div class="each-event-container">
                            <div class="img-session">
                                <img src="{{ url('/event_images/'.$upcoming_events[$i]->profile_image) }}" alt="event-img">
                            </div>
                            <div class="content-session">
                                <div class="upper-content d-flex flex-column">
                                    <p class="main-title">{{$upcoming_events[$i]->name}}</p>
                                    <p class="short-desc">{{$upcoming_events[$i]->short_description}}</p>
                                    @php
                                        $guests_ids = \App\Models\Takenby::where('event_id',$upcoming_events[$i]->id)->get('guest_id');
                                    @endphp
                                    <p class="guest-text"><span>Guest:</span>
                                        @foreach($guests_ids as $guest_id)
                                            @php
                                                $guest = \App\Models\Guest::find($guest_id)->first();
                                            @endphp
                                            {{$guest->name}},
                                        @endforeach
                                    </p>
                                    <div class="date-time-div d-flex justify-content-start align-items-center">
                                        <p class="date-session"><span><i class="far fa-calendar-alt"></i></span>{{$upcoming_events[$i]->date}}</p>
                                        <p><span><i class="far fa-clock"></i></span> {{$upcoming_events[$i]->time}}</p>
                                    </div>
                                    <p class="event-countdown-p"><span>Event start in:<span> {{$upcoming_events[$i]->date}} </p>
                                    <div class="register-button-div">
                                        <button id="each-event-register-button" class="btn btn-md btn-primary">Register</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($i+1>=sizeof($upcoming_events))
                        @break;
                    @endif
                    <div class="col-12 col-md-4">
                        <div class="each-event-container">
                            <div class="img-session">
                                <img src="{{ url('/event_images/'.$upcoming_events[$i+1]->profile_image) }}" alt="event-img">
                            </div>
                            <div class="content-session">
                                <div class="upper-content d-flex flex-column">
                                    <p class="main-title">{{$upcoming_events[$i+1]->name}}</p>
                                    <p class="short-desc">{{$upcoming_events[$i+1]->short_description}}</p>
                                    @php
                                        $guests_ids = \App\Models\Takenby::where('event_id',$upcoming_events[$i+1]->id)->get('guest_id');
                                    @endphp
                                    <p class="guest-text"><span>Guest:</span>
                                        @foreach($guests_ids as $guest_id)
                                            @php
                                                $guest = \App\Models\Guest::find($guest_id)->first();
                                            @endphp
                                            {{$guest->name}},
                                        @endforeach
                                    </p>
                                    <div class="date-time-div d-flex justify-content-start align-items-center">
                                        <p class="date-session"><span><i class="far fa-calendar-alt"></i></span>{{$upcoming_events[$i+1]->date}}</p>
                                        <p><span><i class="far fa-clock"></i></span> {{$upcoming_events[$i+1]->time}}</p>
                                    </div>
                                    <p class="event-countdown-p"><span>Event start in:<span> {{$upcoming_events[$i+1]->date}} </p>
                                    <div class="register-button-div">
                                        <button id="each-event-register-button" class="btn btn-md btn-primary">Register</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($i+2>=sizeof($upcoming_events))
                        @break;
                    @endif
                    <div class="col-12 col-md-4">
                        <div class="each-event-container">
                            <div class="img-session">
                                <img src="{{ url('/event_images/'.$upcoming_events[$i+2]->profile_image)  }}" alt="event-img">
                            </div>
                            <div class="content-session">
                                <div class="upper-content d-flex flex-column">
                                    <p class="main-title">{{$upcoming_events[$i+2]->name}}</p>
                                    <p class="short-desc">{{$upcoming_events[$i+2]->short_description}}</p>
                                    @php
                                        $guests_ids = \App\Models\Takenby::where('event_id',$upcoming_events[$i+2]->id)->get('guest_id');
                                    @endphp
                                    <p class="guest-text"><span>Guest:</span>
                                        @foreach($guests_ids as $guest_id)
                                            @php
                                                $guest = \App\Models\Guest::find($guest_id)->first();
                                            @endphp
                                            {{$guest->name}},
                                        @endforeach
                                    </p>
                                    <div class="date-time-div d-flex justify-content-start align-items-center">
                                        <p class="date-session"><span><i class="far fa-calendar-alt"></i></span>{{$upcoming_events[$i+2]->date}}</p>
                                        <p><span><i class="far fa-clock"></i></span> {{$upcoming_events[$i+2]->time}}</p>
                                    </div>
                                    <p class="event-countdown-p"><span>Event start in:<span> {{$upcoming_events[$i+2]->date}} </p>
                                    <div class="register-button-div">
                                        <button id="each-event-register-button" class="btn btn-md btn-primary">Register</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div> --}}

        @include('/partials/footer')
