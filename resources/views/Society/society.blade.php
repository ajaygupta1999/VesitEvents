<!DOCTYPE html>
<html>
<head>
	<title>VESIT EVENTS</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- External strylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/society.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/index.css') }}">

	{{-- Font-awesome --}}
	<script src="https://kit.fontawesome.com/7fe6b58c32.js"></script>


	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
</head>
<body>

        <div class="my-content">
		    <nav id="my-navbar" class="navbar navbar-expand-lg navbar-light bg-light">
				  <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
				  	<img id="VES_logo" src="{{ url('/asserts/VES_logo.png') }}">
				  	<span id="vesit-logo">VESIT EVENTS</span>
				  </a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
                    @if(!session('email'))
			      <div class="collapse navbar-collapse" id="navbarSupportedContent">
					    <ul class="navbar-nav ml-auto">
					      <li id="login-li" class="nav-item">
					        <a class="nav-link btn btn-md btn-primary my-login-button" href="{{ url('login') }}">Login</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link btn btn-md btn-primary my-login-button" href="{{ url('register') }}">Sign Up</a>
					      </li>
					    </ul>
			      </div>
                @else
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li id="login-li" class="nav-item">
                                <a class="nav-link btn btn-md btn-primary my-login-button" href="{{ url('logout') }}">Logout</a>
                            </li>
                        </ul>
                    </div>
                @endif
		    </nav>
	    </div>

	    <div class="socirty-intro-div">
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
	    </div>

        <div class="d-flex justify-content-center align-items-center">
			<h4 class="my-ongoing-title-society">All On-going Events</h4>
		</div>
        <div class="MY-on-going-evenets">
            <div class="row">
            	<div class="col-12 col-md-4">
					<div class="each-event-container">
						<div class="img-session">
							<img src="{{ url('/asserts/event_img.jpg') }}" alt="event-img">
						</div>
						<div class="content-session">
							<div class="upper-content d-flex flex-column">
								<p class="main-title">Android Development</p>
								<p class="short-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
								<p class="guest-text"><span>Guest:</span> Ajay Gupta, Hritwik Ekade, Neel bhagat</p>
								<div class="date-time-div d-flex justify-content-start align-items-center">
									<p class="date-session"><span><i class="far fa-calendar-alt"></i></span> 24 Oct 2020</p>
									<p><span><i class="far fa-clock"></i></span> 05:04pm</p>
								</div>
								<p class="event-countdown-p"><span>Event start in:<span> 05:05:30</p>
								<div class="register-button-div">
									<button id="each-event-register-button" class="btn btn-md btn-primary">Register</button>
								</div>
							</div>
						</div>
					</div>
            	</div>
            	<div class="col-12 col-md-4">
					<div class="each-event-container">
						<div class="img-session">
							<img src="{{ url('/asserts/event_img.jpg') }}" alt="event-img">
						</div>
						<div class="content-session">
							<div class="upper-content d-flex flex-column">
								<p class="main-title">Android Development</p>
								<p class="short-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
								<p class="guest-text"><span>Guest:</span> Ajay Gupta, Hritwik Ekade, Neel bhagat</p>
								<div class="date-time-div d-flex justify-content-start align-items-center">
									<p class="date-session"><span><i class="far fa-calendar-alt"></i></span> 24 Oct 2020</p>
									<p><span><i class="far fa-clock"></i></span> 05:04pm</p>
								</div>
								<p class="event-countdown-p"><span>Event start in:<span> 05:05:30</p>
								<div class="register-button-div">
									<button id="each-event-register-button" class="btn btn-md btn-primary">Register</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4">
					<div class="each-event-container">
						<div class="img-session">
							<img src="{{ url('/asserts/event_img.jpg') }}" alt="event-img">
						</div>
						<div class="content-session">
							<div class="upper-content d-flex flex-column">
								<p class="main-title">Android Development</p>
								<p class="short-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
								<p class="guest-text"><span>Guest:</span> Ajay Gupta, Hritwik Ekade, Neel bhagat</p>
								<div class="date-time-div d-flex justify-content-start align-items-center">
									<p class="date-session"><span><i class="far fa-calendar-alt"></i></span> 24 Oct 2020</p>
									<p><span><i class="far fa-clock"></i></span> 05:04pm</p>
								</div>
								<p class="event-countdown-p"><span>Event start in:<span> 05:05:30</p>
								<div class="register-button-div">
									<button id="each-event-register-button" class="btn btn-md btn-primary">Register</button>
								</div>
							</div>
						</div>
					</div>
            	</div>
			</div>
		</div>

		<div class="d-flex justify-content-center align-items-center">
			<h4 class="my-ongoing-title-society">All Upcoming-going Events</h4>
		</div>
        <div class="MY-on-going-evenets">
            <div class="row">
            	<div class="col-12 col-md-4">
					<div class="each-event-container">
						<div class="img-session">
							<img src="{{ url('/asserts/event_img.jpg') }}" alt="event-img">
						</div>
						<div class="content-session">
							<div class="upper-content d-flex flex-column">
								<p class="main-title">Android Development</p>
								<p class="short-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
								<p class="guest-text"><span>Guest:</span> Ajay Gupta, Hritwik Ekade, Neel bhagat</p>
								<div class="date-time-div d-flex justify-content-start align-items-center">
									<p class="date-session"><span><i class="far fa-calendar-alt"></i></span> 24 Oct 2020</p>
									<p><span><i class="far fa-clock"></i></span> 05:04pm</p>
								</div>
								<p class="event-countdown-p"><span>Event start in:<span> 05:05:30</p>
								<div class="register-button-div">
									<button id="each-event-register-button" class="btn btn-md btn-primary">Register</button>
								</div>
							</div>
						</div>
					</div>
            	</div>
            	<div class="col-12 col-md-4">
					<div class="each-event-container">
						<div class="img-session">
							<img src="{{ url('/asserts/event_img.jpg') }}" alt="event-img">
						</div>
						<div class="content-session">
							<div class="upper-content d-flex flex-column">
								<p class="main-title">Android Development</p>
								<p class="short-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
								<p class="guest-text"><span>Guest:</span> Ajay Gupta, Hritwik Ekade, Neel bhagat</p>
								<div class="date-time-div d-flex justify-content-start align-items-center">
									<p class="date-session"><span><i class="far fa-calendar-alt"></i></span> 24 Oct 2020</p>
									<p><span><i class="far fa-clock"></i></span> 05:04pm</p>
								</div>
								<p class="event-countdown-p"><span>Event start in:<span> 05:05:30</p>
								<div class="register-button-div">
									<button id="each-event-register-button" class="btn btn-md btn-primary">Register</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4">
					<div class="each-event-container">
						<div class="img-session">
							<img src="{{ url('/asserts/event_img.jpg') }}" alt="event-img">
						</div>
						<div class="content-session">
							<div class="upper-content d-flex flex-column">
								<p class="main-title">Android Development</p>
								<p class="short-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
								<p class="guest-text"><span>Guest:</span> Ajay Gupta, Hritwik Ekade, Neel bhagat</p>
								<div class="date-time-div d-flex justify-content-start align-items-center">
									<p class="date-session"><span><i class="far fa-calendar-alt"></i></span> 24 Oct 2020</p>
									<p><span><i class="far fa-clock"></i></span> 05:04pm</p>
								</div>
								<p class="event-countdown-p"><span>Event start in:<span> 05:05:30</p>
								<div class="register-button-div">
									<button id="each-event-register-button" class="btn btn-md btn-primary">Register</button>
								</div>
							</div>
						</div>
					</div>
            	</div>
			</div>
		</div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
