<!DOCTYPE html>
<html>
<head>
	<title>VESIT EVENTS</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <!-- External strylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/society.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/index.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/eachevent.css') }}">

	
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
        
        <div class="each-event-main-div">
            <div class="row">
                <div class="col-12 col-md-8">
                </div>
                <div class="col-12 col-md-4">
                   <div class="img-div">
                       <img src="{{  }}" alt="">
                   </div>
                </div>
            </div>

        </div>

	    
      
       

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>