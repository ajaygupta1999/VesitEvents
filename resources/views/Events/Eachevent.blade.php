<!DOCTYPE html>
<html>
<head>
	<title>VESIT EVENTS</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- External strylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/society.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('/css/eachevent.css') }}">
	<link href="{{ url('/css/index.css') }}" type="text/css" rel="stylesheet">


	{{-- Font-awesome --}}
	<script src="https://kit.fontawesome.com/7fe6b58c32.js"></script>


	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
</head>
<body>

        <div class="my-content">
		    <nav id="my-navbar" class="navbar navbar-expand-lg navbar-light bg-light">
				  <a class="navbar-brand d-flex align-items-center" href="{{ url('/home') }}">
				  	<img id="VES_logo" src="{{ url('/asserts/VES_logo.png') }}">
				  	<span id="vesit-logo">VESIT EVENTS</span>
				  </a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            {{-- <a class="nav-link btn btn-md btn-primary my-login-button" href="{{ url('/signup') }}">Sign Up</a>--}}

                            <a class="nav-link btn btn-md btn-primary my-login-button" href="{{ url('logout') }}">Logout</a>
                        </li>
                    </ul>
                </div>
		    </nav>
        </div>

        <div class="each-event-main-div">
            <div class="row">
				<div class="col-8">
					<div class="row each-event-main-div-session">
						<div class="col-8">
							<div class="each-event-content d-flex flex-column">
								<p class="event-name">{{$event->name}}</p>
								<p class="event-short-desc"> {{$event->short_description}}
								</p>
								<p class="event-guest"><span>Guests:</span> Ajay, Vijay, Ranjana </p>
								<p class="event-date-time"><span><i class="far fa-calendar-alt"></i> 5/4/2020</span> <span><i class="far fa-clock"></i> 5:40 pm</span></p>
								<p class="event-orgnizor">From: <span>{{$event->society}}</span></p>
								<div class="register-button-div">
                                    <a id="each-event-register-button" href="register/{{$event->id}}"><button  class="btn btn-md btn-primary">Register</button></a>
								</div>
							</div>
						</div>
						<div class="col-4 d-flex justify-content-center align-items-center">
						   <div class="img-div">
							   <img src="{{ url('/asserts/event_img.jpg') }}" alt="">
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
{{--									<img style="width : 100px;" src="{{ url('/asserts/registrations.jpg') }}" alt="user-profile">--}}
                                    <img style="width : 100px;" src="{{ url('/profile_images/'.$user->profile_image) }}" alt="user-profile">

{{--                                    <img src="{{ url('/event_images/'.$event->profile_image) }}" alt="event-img">--}}
                                </div>
                                @php
                                $registration = \App\Models\Register::where('event_id',$event->id)->get();
                                $total_registration = $registration->count();
                                $all_year = \App\Models\User::join('registers','registers.user_id','=','users.id')
                                ->where('event_id',$event->id)
                                ->get('users.*');
                                $first_year = $all_year->where('current_year',1)->count();
                                $second_year = $all_year->where('current_year',2)->count();
                                $third_year = $all_year->where('current_year',3)->count();
                                @endphp
								<p>{{$total_registration}} Regestrations</p>
							</div>
					   </div>
					   <div class="class-reg-details d-flex justify-content-start">
							<div><span>D12C</span> - <span>{{$second_year}}</span></div>
							<div><span>D17C</span> - <span>{{$third_year}}</span></div>
							<div><span>D7C</span> - <span>{{$first_year}}</span></div>
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
						<img src="{{ url('/asserts/event_img.jpg') }}" alt="">
					</div>
				</div>
			</div>
		</div>

		<center><h2 class="main-title-event-guest">Event Guests</h2></center>
		<div class="container guest-session d-flex justify-content-between">

					<div class="guest-card d-flex flex-column">
						<div class="guest-img">
							<img src="{{ url('/asserts/user-img1.jpg') }}" alt="">
						</div>
						<div class="guest-detail">
							<p class="guest-name">Ajay Gupta</p>
							<p>Web developer at Stamurai, Web developer</p>
							<p class="guest-division-seesion"><span>D12C</span>, <span>CMPN</span></p>
						</div>
					</div>

					<div class="guest-card d-flex flex-column">
						<div class="guest-img">
							<img src="{{ url('/asserts/user-img1.jpg') }}" alt="">
						</div>
						<div class="guest-detail">
							<p class="guest-name">Ajay Gupta</p>
							<p>Web developer at Stamurai, Web developer</p>
							<p class="guest-division-seesion"><span>D12C</span>, <span>CMPN</span></p>
						</div>
					</div>

					<div class="guest-card d-flex flex-column">
						<div class="guest-img">
							<img src="{{ url('/asserts/user-img1.jpg') }}" alt="">
						</div>
						<div class="guest-detail">
							<p class="guest-name">Ajay Gupta</p>
							<p>Web developer at Stamurai, Web developer</p>
							<p class="guest-division-seesion"><span>D12C</span>, <span>CMPN</span></p>
						</div>
					</div>
			</div>
		</div>

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



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
