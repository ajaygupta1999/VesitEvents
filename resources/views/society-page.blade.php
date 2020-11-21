<!DOCTYPE html>
<html>
<head>
	<title>VESIT EVENTS</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- External strylesheet -->
	<link rel="stylesheet" type="text/css" href="/myevent/public/css/main-page.css">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
</head>
<body>

        <div class="my-content">
		    <nav id="my-navbar" class="navbar navbar-expand-lg navbar-light bg-light">
				  <a class="navbar-brand d-flex align-items-center" href={{url('/')}}>
				  	<img id="VES_logo" src={{url("images/VES_logo.png")}}>
				  	<span id="vesit-logo">VESIT EVENTS</span>
				  </a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

                @if(!session('email'))
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li id="login-li" class="nav-item">
                                <a class="nav-link btn btn-md btn-primary my-login-button" href="{{url('login')}}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-md btn-primary my-login-button" href="{{url('register')}}">Sign Up</a>
                            </li>
                        </ul>
                    </div>
                @else
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li id="login-li" class="nav-item">
                                <a class="nav-link btn btn-md btn-primary my-login-button" href="{{url('logout')}}">Logout</a>
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
	    					<img src="{{url('images/society-background.png')}}">
	    				</div>
	    				<div class="socirty-logo-session">
	    					<img src="{{url('images/isa_logo.jpg')}}">
	    				</div>
	    				<div class="socirty-description-session">
	    					<h4>ISA SOCIETY</h4>
	    					<p class="society-page-description">
	    						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
	    					</p>
	    					<p class="socirty-total-employees">
	    						45 Employees
	    					</p>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="col-md-4">
	    		</div>
	    	</div>
	    </div>

        <h4 class="my-ongoing-title">All Events</h4>

        <div class="MY-on-going-evenets">
            <div class="row">
            	<div class="col-12 col-md-6">
            		<div class="Each-event d-flex justify-content-start">
            			<div class="Each-event-society-img d-flex align-items-center">
            				<img src="{{url('images/isa_logo.jpg')}}">
            			</div>
            			<div class="Each-event-content d-flex flex-column">
            				<p class="main-event-title">Android Workshop</p>
            				<p class="main-event-desc">Lorem Ipsum is simply dummy text of the printing and
								typesetting industry. Lorem Ipsum has been the industry
							</p>
							<p class="main-event-guests">
								<span>Guest:</span> Ajay Gupta, Hritwik ekade, Neel Bhagat
							</p>
							<p class="main-event-date-time"><span>Date & Time : </span> 24 sept 2020 4:30pm</p>
            			</div>
            			<div class="Each-event-img d-flex align-items-center">
            				<img src="{{url('images/event_img.jpg')}}">
            			</div>
            		</div>
            	</div>
            	<div class="col-12 col-md-6">
            		<div class="Each-event d-flex justify-content-start">
            			<div class="Each-event-society-img d-flex align-items-center">
                            <img src="{{url('images/isa_logo.jpg')}}">
            			</div>
            			<div class="Each-event-content d-flex flex-column">
            				<p class="main-event-title">Android Workshop</p>
            				<p class="main-event-desc">Lorem Ipsum is simply dummy text of the printing and
								typesetting industry. Lorem Ipsum has been the industry
							</p>
							<p class="main-event-guests">
								<span>Guest:</span> Ajay Gupta, Hritwik ekade, Neel Bhagat
							</p>
							<p class="main-event-date-time"><span>Date & Time : </span> 24 sept 2020 4:30pm</p>
            			</div>
            			<div class="Each-event-img d-flex align-items-center">
                            <img src="{{url('images/event_img.jpg')}}">
            			</div>
            		</div>
            	</div>
            	<div class="col-12 col-md-6">
            		<div class="Each-event d-flex justify-content-start">
            			<div class="Each-event-society-img d-flex align-items-center">
                            <img src="{{url('images/isa_logo.jpg')}}">
            			</div>
            			<div class="Each-event-content d-flex flex-column">
            				<p class="main-event-title">Android Workshop</p>
            				<p class="main-event-desc">Lorem Ipsum is simply dummy text of the printing and
								typesetting industry. Lorem Ipsum has been the industry
							</p>
							<p class="main-event-guests">
								<span>Guest:</span> Ajay Gupta, Hritwik ekade, Neel Bhagat
							</p>
							<p class="main-event-date-time"><span>Date & Time : </span> 24 sept 2020 4:30pm</p>
            			</div>
            			<div class="Each-event-img d-flex align-items-center">
                            <img src="{{url('images/event_img.jpg')}}">
            			</div>
            		</div>
            	</div>
            	<div class="col-12 col-md-6">
            		<div class="Each-event d-flex justify-content-start">
            			<div class="Each-event-society-img d-flex align-items-center">
                            <img src="{{url('images/isa_logo.jpg')}}">
            			</div>
            			<div class="Each-event-content d-flex flex-column">
            				<p class="main-event-title">Android Workshop</p>
            				<p class="main-event-desc">Lorem Ipsum is simply dummy text of the printing and
								typesetting industry. Lorem Ipsum has been the industry
							</p>
							<p class="main-event-guests">
								<span>Guest:</span> Ajay Gupta, Hritwik ekade, Neel Bhagat
							</p>
							<p class="main-event-date-time"><span>Date & Time : </span> 24 sept 2020 4:30pm</p>
            			</div>
            			<div class="Each-event-img d-flex align-items-center">
                            <img src="{{url('images/event_img.jpg')}}">
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
