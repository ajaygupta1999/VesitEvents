<!DOCTYPE html>
<html>
<head>
	<title>VESIT EVENTS</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- External strylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/index.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/userprofile.css') }}">

    <script src="https://kit.fontawesome.com/7fe6b58c32.js"></script>
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
                            <li id="login-li" class="nav-item">
                                {{$user->email}}
                            </li>
                            <li id="login-li" class="nav-item">
                                <a class="nav-link btn btn-md btn-primary my-login-button" href="{{url('logout')}}">Logout</a>
                            </li>
					    </ul>
			      </div>
		    </nav>
 	    </div>

        <div class="container user-profile-details">
            <div class="row">
                <div class="col-3">
                  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Personal Details</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Class Details</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Society Details</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Event Reqistered</a>
                  </div>
                </div>
                <div class="col-9">
                  <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="personal-details d-flex flex-column">
                            <h2 class="personal-detail-title"> Personal Details </h2>
                            <form action="profile/personaldetails" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">First Name</label>
                                            <input type="text" name="first_name" class="form-control" id="exampleFormControlInput1" placeholder="Enter First Name" value="{{ $user->first_name }}">
                                          </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Last Name</label>
                                            <input type="text"  name="last_name" class="form-control" id="exampleFormControlInput1" placeholder="Enter last Name" value="{{ $user->last_name }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Gender</label>
                                            <input type="text" name="gender" class="form-control" id="exampleFormControlInput1" placeholder="Your Gender" value="male">
                                          </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Phone Number</label>
                                            <input type="number" name="phone_number" class="form-control" id="exampleFormControlInput1" placeholder="Phone Number" value="{{ $user->phone_number }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Email</label>
                                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter last Name" value="{{ $user->email }}" disabled>
                                </div>
                                <button class="btn btn-md btn-primary" > Save </button>
                              </form>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="class-details">
                            <h2 class="class-detail-title">Class Details</h2>
                            <form action="profile/classdetails" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Department</label>
                                            <input type="text" name="department" class="form-control" id="exampleFormControlInput1" placeholder="Your Department" value="{{ $user->department }}">
                                          </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Current Year Of Study</label>
                                            <input type="number" name="current_year" class="form-control" id="exampleFormControlInput1" placeholder="Your Year Of study" value="{{ $user->current_year }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Class</label>
                                            <input type="number" name="class" class="form-control" id="exampleFormControlInput1" placeholder="Your Class" value="{{ $user->class }}">
                                          </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Roll No.</label>
                                            <input type="number" name="roll_no" class="form-control" id="exampleFormControlInput1" placeholder="Your Roll No" value="{{ $user->roll_no }}">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-md btn-primary"> Save </button>
                              </form>
                        </div>
                    </div>

                    {{-- Society Details --}}
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <div class="society-details">
                            <h2 class="society-detail-title">Society Details</h2>
                            <form action="profile/societydetails" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1" class="label">Society Name(From Which you belong)</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="society">
                                              <option>Isa</option>
                                              <option>Ieee</option>
                                              <option>Csi</option>
                                              <option>Iste</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1" class="label">Role(What is your role in that society)</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="role">
                                              <option>Normal Member</option>
                                              <option>Council Member</option>
                                              <option>Council Head</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-md btn-primary"> Save </button>
                              </form>
                        </div>
                    </div>

                    {{-- Event Registered session --}}
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <div class="event-details">
                            <h2 class="event-detail-title">Registered Event Details</h2>
                            <div class="all-event-cards">
                                <div class="row">
                                    @foreach($events as $event)
                                    <div class="col-4">
                                        <div class="each-event-card d-flex flex-column">
                                            <p class="event-title">{{$event->name}}</p>
                                            <p class="date-and-time">
                                                <span><i class="far fa-calendar-alt"></i>{{$event->date}}</span>
                                                <span><i class="far fa-clock"></i>{{$event->time}}</span>
                                            </p>
                                            <a id="each-event-register-button"  class="btn btn-md btn-warning" href="{{route('event_page',$event->id)}}">View Details</a>
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


		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
