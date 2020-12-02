<!DOCTYPE html>
<html>
<head>
	<title>VESIT EVENTS</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- External strylesheet -->
	<link rel="stylesheet" type="text/css" href="{{ url('css/login.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/index.css') }}">
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
</head>
<body>

	    <div class="my-content">
		    <nav id="my-navbar" class="navbar navbar-expand-lg navbar-light bg-light">
				  <a class="navbar-brand" href="{{ url('/') }}">
				  	<img id="VES_logo" src="{{ url('/asserts/VES_logo.png') }}">
				  	<span id="vesit-logo">VESIT EVENTS</span>
				  </a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
					    <ul class="navbar-nav ml-auto">
					      <li class="nav-item">
					        <a class="nav-link btn btn-md btn-primary my-login-button" href="{{url('register')}}">Sign Up</a>
					      </li>
					    </ul>
			      </div>
		    </nav>
	    </div>

		<div class="our-login-page-content">
			<div id="login-container">
				<div class="login-page-contant">
					<form class="submit-forms" action={{route('login_check')}} method="POST">
                        @csrf
						<center><h1 class="new-h1">Log in</h1></center>
						<div class="form-group">
						  <label for="email"  class="label">Email</label>
						  <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter Your email address"
								 name="email">
						</div>
						<div class="form-group">
						 <label for="login-login"  class="label">Password</label>
							<div class="password">
							<input type="password" class="form-control" id="login-login" aria-describedby="emailHelp"  placeholder="Enter Your Password"
								   name="password">
							</div>
						 </div>
                        <button type="submit" class="btn btn-primary btn-md btn-block">Login</button>
						{{-- <button type="submit" class="btn btn-primary btn-md btn-block">Login</button> --}}
						<div class="d-flex justify-content-between" id="forgotpassword">
							<div>
								<a href="{{ url('/') }}">Go back</a>
							</div>
							<div>
								<a id="forgotbuttonlink" href="{{url('reset')}}">Forgot Password</a>
							</div>
						</div>

					</form>
				</div>
                <p style="text-align: center; color: red">{{session('status')}}</p>
			</div>
        </div>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
