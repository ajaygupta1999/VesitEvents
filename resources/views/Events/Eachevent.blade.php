
	@include('/partials/header')
	@include('/partials/navbar')

        <div class="each-event-main-div">
            <div class="row">
				<div class="col-8">
					<div class="row each-event-main-div-session">
						<div class="col-8">
							<div class="each-event-content d-flex flex-column">
								<p class="event-name">{{$event->name}}</p>
								<p class="event-short-desc"> {{$event->short_description}}
								</p>
                                @php
                                    $guests_ids = \App\Models\Takenby::where('event_id',$event->id)->get('guest_id');
                                @endphp
                                <p class="event-guest"><span>Guest:</span>
                                    @for($j=0 ; $j < sizeof($guests_ids) ; $j++)
                                        @php
                                            $guest = \App\Models\Guest::find($guests_ids[$j])->first();
                                            if(sizeof($guests_ids) == 1){
                                                $guest_data = $guest->name.".";
                                                break;
                                            }
                                            if($j == 0){
                                                $guest_data = $guest->name;
                                                continue;
                                            }
                                        @endphp

                                        @if($j < sizeof($guests_ids) - 1)
                                            @php
                                                $guest_data = $guest_data.", ".$guest->name;
                                            @endphp
                                        @endif
                                        @if($j == sizeof($guests_ids) - 1)
                                            @php
                                                $guest_data = $guest_data.", ".$guest->name.".";
                                            @endphp
                                        @endif
                                    @endfor
                                    @if(sizeof($guests_ids)>0)
                                        {{$guest_data}}
                                    @endif
                                </p>
								<p class="event-date-time"><span><i class="far fa-calendar-alt"></i>{{$event->date}}</span> <span><i class="far fa-clock"></i>{{$event->time}}</span></p>
								<p class="event-orgnizor">From: <span>{{$event->society}}</span></p>
                                @php
                                    $already_register = \App\Models\Register::where('event_id',$event->id)
                                                        ->where('user_id',$user->id)
                                                        ->first()
                                @endphp
                                @if(!$already_register)
								<div class="register-button-div">
                                    <a id="each-event-register-button" href="register/{{$event->id}}"><button  class="btn btn-md btn-primary">Register</button></a>
								</div>
                                @else
                                    <p>Already Registered</p>
                                @endif
							</div>

						</div>
						<div class="col-4 d-flex justify-content-center align-items-center">
						   <div class="img-div">
							   <img style="width : 300px;" src="{{ url('/event_images/'.$event->profile_image)  }}" alt="">
{{--                               <img src="{{ url('/event_images/'.$event->profile_image) }}" alt="event-img">--}}
						   </div>
						</div>
					</div>
				</div>
				<div class="col-4">
                   <div class="all-registrations d-flex flex-column">
					   <h5>All Registrations</h5>
					   <div class="total-reg-today d-flex justify-content-center">
							<div class="d-flex flex-column">
								<div>
									<img style="width : 100px;" src="{{ url('/asserts/registrations.jpg') }}" alt="user-profile">
                                    {{-- <img style="width : 100px;" src="{{ url('/profile_images/'.$user->profile_image) }}" alt="user-profile"> --}}
                                </div>
                                @php
                                $registration = \App\Models\Register::where('event_id',$event->id)->get();
                                $total_registration = $registration->count();
                                $all_year = \App\Models\User::join('registers','registers.user_id','=','users.id')
                                ->where('registers.event_id',$event->id)
                                ->get('users.*');
                                $first_year = $all_year->where('current_year',1)->count();
                                $second_year = $all_year->where('current_year',2)->count();
                                $third_year = $all_year->where('current_year',3)->count();
                                $fourth_year = $all_year->where('current_year',1)->count();
                                @endphp
								<p>{{$total_registration}} Registrations</p>
							</div>
					   </div>
					   <div class="class-reg-details d-flex justify-content-start">
							<div><span>D7C</span> - <span>{{$second_year}}</span></div>
                           <div><span>D12C</span> - <span>{{$third_year}}</span></div>
                           <div><span>D17C</span> - <span>{{$fourth_year}}</span></div>
					    </div>
				   </div>
				</div>
            </div>
		</div>

		{{-- Full detail session --}}
		<center><h2 class="main-title-full-detail">Full Detail of Event</h2></center>
		<div class="full-detail-session container">
			<div class="row">
				<div class="col-8">
					<p>
                        {{$event->long_description}}
					</p>
				</div>
				<div class="col-4">
					<div class="full-detail-img-session">
                        <img style="width : 300px;" src="{{ url('/event_images/'.$event->profile_image)  }}" alt="">
					</div>
				</div>
			</div>
		</div>
        @php
            $guests_ids= \App\Models\Takenby::where('event_id',$event->id)->get();
        @endphp
		<center><h2 class="main-title-event-guest">Event Guests</h2></center>
        @foreach($guests_ids as $guest_id)
            @php
                $guest_detail= \App\Models\Guest::find($guest_id->guest_id);
            @endphp
		<div class="container guest-session d-flex justify-content-between">

					<div class="guest-card d-flex flex-column">
						<div class="guest-img">
							<img src="{{ url('/asserts/user-img1.jpg') }}" alt="">
						</div>
						<div class="guest-detail">
							<p class="guest-name">{{$guest_detail->name}}</p>
{{--							<p>{{$guest_detail->description}}</p>--}}
							<p class="guest-division-seesion"><span>{{$guest_detail->organization_details}}</span>, <span>{{$guest_detail->position}}</span></p>
						</div>
					</div>
			</div>
        @endforeach

		<center><h2 class="main-title-full-detail">Sponsored by</h2></center>
        <div class="full-detail-session container">
			<div class="row">
				<div class="col-8">
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
					</p>
				</div>
				<div class="col-4">
					<div class="full-detail-img-session">
						<img id="github-img" style="" src="{{ url('/asserts/github.png') }}" alt="">
					</div>
				</div>
			</div>
		</div>

@include('/partials/footer')
