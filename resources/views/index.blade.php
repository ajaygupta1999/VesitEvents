<!DOCTYPE html>
<html>
<head>
	<title>VESIT EVENTS</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <!-- External strylesheet -->
    <link href="{{ url('/css/index.css') }}" type="text/css" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="../css/main-page.css"> -->
	
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
				  <a id="addevent-button-home-page" class="navbar-item d-flex align-items-center" href="{{ url('/addevent/aboutevent') }}">
					<span class="add-event-button">Add Event</span>
				  </a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
	            
			      <div class="collapse navbar-collapse" id="navbarSupportedContent">
					    <ul class="navbar-nav ml-auto">
					      <li id="login-li" class="nav-item">
					        <a class="nav-link btn btn-md btn-primary my-login-button" href="{{ url('/login') }}">Login</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link btn btn-md btn-primary my-login-button" href="{{ url('/signup') }}">Sign Up</a>
					      </li>
					    </ul>
			      </div>
		    </nav>
		</div>
		
		<div class="container home-main-header">
			<div class="row">
				<div class="home-content col-md-6">
					<p class="home-main-title">VESIT Event Portal, One Platform for All Events.</p>
					<p class="home-description">This is all in one platform for VESIT events, you will 
					  get here all the events from all the society's as well 
					  from college. Here you will easily able to register for any 
					  events which is held by college or society.</p>
				</div>
				<div class="col-md-6">
					<div class="home-img-session d-flex justify-content-center align-items-center">
					    <div class="home-ad-event-pic">
							<img src="{{ url('/asserts/eventpic3.png') }}" alt="Event-pic">
						</div>
						<div class="home-ad-left-right-arrow">
							<img src="{{ url('/asserts/left-right-arrow.jpg') }}" alt="Left-right-arrow">
						</div>
						<div class="home-ad-ves_logo">
							<img src="{{ url('/asserts/VES_logo.png') }}" alt="VES-logo">
						</div>
				    </div>
				</div>
			</div>
		  
		</div>
		

        <div class="home-page-all-society d-flex justify-content-center">
			<h4>All Societies</h4>
        </div>
	    <div class="my-all-socierty-div d-flex justify-content-center">
	    	<div class="row my-society-content container">
				<div class="col-6 col-md-3 d-flex justify-content-center">
					    <a href="{{ url('/society') }}">
							<div class="ISA-society d-flex flex-column">
								<img src="{{ url('/asserts/isa_logo.gif') }}">
								<h4>ISA</h4>
							</div>
						</a>
				</div>
		    	<div class="col-6 col-md-3 d-flex justify-content-center">
					<a href="{{ url('/society') }}">
						<div class="IEEE-society d-flex flex-column">
							<img src="{{ url('/asserts/ieee_logo.jpg') }}">
							<h4>IEEE</h4>
						</div>
					</a>
		    	</div>
		    	<div class="col-6 col-md-3 d-flex justify-content-center">
					<a href="{{ url('/society') }}">
						<div class="ISTE-society d-flex flex-column">
							<img src="{{ url('/asserts/iste_logo.jpg') }}">
							<h4>ISTE</h4>
						</div>
					</a>
		    	</div>
		    	<div class="col-6 col-md-3 d-flex justify-content-center">
				    <a href="{{ url('/society') }}">
						<div class="CSI-society d-flex flex-column">
							<img src="{{ url('/asserts/csi_logo.jpg') }}">
							<h4>CSI</h4>
						</div>
				    </a>
		    	</div>
	    	</div>
	    </div>
		
		<div class="d-flex justify-content-center align-items-center">
			<h4 class="my-ongoing-title">On Going Events</h4>
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
			<h4 class="my-upcoming-title">Upcoming Events</h4>
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