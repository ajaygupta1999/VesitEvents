<!DOCTYPE html>
<html>
<head>
	<title>VESIT EVENTS</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- External strylesheet -->
	<link rel="stylesheet" type="text/css" href="{{ url('css/login.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/index.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/signup.css') }}">
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
</head>
<body>

	    <div class="my-content">
		    <nav id="my-navbar" class="navbar navbar-expand-lg navbar-light bg-light">
				  <a class="navbar-brand" href="{{ url('/home') }}">
				  	<img id="VES_logo" src="{{ url('/asserts/VES_logo.png') }}">
				  	<span id="vesit-logo">VESIT EVENTS</span>
				  </a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

			      <div class="collapse navbar-collapse" id="navbarSupportedContent">
					    <ul class="navbar-nav ml-auto">
					      <li class="nav-item">
					        <a class="nav-link btn btn-md btn-primary my-login-button" href="{{ url('/signup') }}">Sign Up</a>
					      </li>
					    </ul>
			      </div>
		    </nav>
	    </div>

		<div class="our-login-page-content">
			<div id="login-container">
				<div class="login-page-contant">
					<form class="submit-forms" action="classdetails/add" method="POST"  enctype="multipart/form-data">
                        @csrf
                        <center><h1 class="new-h1">Class & Society Details</h1></center>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1" class="label">College Department</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="department">
                              <option>CMPN</option>
                              <option>IT</option>
                              <option>EXTC</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1" class="label">Current Year of Study</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="current_year">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="label" for="exampleFormControlSelect1">Class</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="class">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                        </div>
						<div class="form-group">
						  <label for="username"  class="label">Roll No</label>
						  <input type="number" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter your Roll No"
								 name="roll_no">
						</div>
						<div class="form-group">
						 <label for="login-login"  class="label">Semester</label>
							<div class="password">
							<input type="number" class="form-control" id="login-login" aria-describedby="emailHelp"  placeholder="Enter Your Current Semester"
								   name="semester">
							</div>
                         </div>
                         <div class="small-message-related-to-text">
                             <p>If You are a member/council-member/society-head/HOD then fill the details otherwise you
                                can skip this part.</p>
                         </div>
                         <div class="form-group">
                            <label for="exampleFormControlSelect1" class="label">Society Name(From Which you belong)</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="society">
                                <option>None</option>
                              <option>ISA</option>
                              <option>IEEE</option>
                              <option>CSI</option>
                              <option>ISTE</option>
{{--                              <option>CODECELL</option>--}}
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1" class="label">Role(What is your role in that society)</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="role">
                              <option>Normal-member</option>
                              <option>council-member</option>
                              <option>council-head</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-between" id="forgotpassword">
                            <div>
                                <button type="submit" class="btn btn-primary btn-md btn-block">Next</button>
                            </div>

						</div>

					</form>
				</div>
			</div>
        </div>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
