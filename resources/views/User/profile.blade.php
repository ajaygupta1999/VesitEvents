@include('/partials/header')
@include('/partials/navbar')

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
                            <form action="/user/{{ $user->email }}/profile/personaldetails" method="post">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">First Name</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter First Name" value="{{ $user->first_name }}">
                                          </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Last Name</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter last Name" value="{{ $user->last_name }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Gender</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Gender" value="male">
                                          </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Phone Number</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Phone Number" value="{{ $user->phone_number }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Email</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter last Name" value="{{ $user->email }}" disabled>
                                </div>
                                <button class="btn btn-md btn-primary" > Save </button>
                              </form>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="class-details">
                            <h2 class="class-detail-title">Class Details</h2>
                            <form action="/user/{{ $user->email }}/profile/classdetails" method="post">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Department</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Department" value="{{ $user->department }}">
                                          </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Current Year Of Study</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Year Of study" value="{{ $user->current_year }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Class</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Class" value="{{ $user->class }}">
                                          </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Roll No.</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Roll No" value="{{ $user->roll_no }}">
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
                            <form action="/user/{{ $user->email }}/profile/classdetails" method="post">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1" class="label">Society Name(From Which you belong)</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="society">
                                              <option>ISA</option>
                                              <option>IEEE</option>
                                              <option>CSI</option>
                                              <option>ISTE</option>
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
                                    <div class="col-4">
                                        <div class="each-event-card d-flex flex-column">
                                            <p class="event-title">Android Workshop</p>
                                            <p class="date-and-time">
                                                <span><i class="far fa-calendar-alt"></i> 16/10/2020</span>
                                                <span><i class="far fa-clock"></i> 5:40pm</span></
                                            </p>
                                            <a id="each-event-register-button"  class="btn btn-md btn-warning" href="/event/1">View Details</a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="each-event-card d-flex flex-column">
                                            <p class="event-title">PHP Workshop</p>
                                            <p class="date-and-time">
                                                <span><i class="far fa-calendar-alt"></i> 16/10/2020</span>
                                                <span><i class="far fa-clock"></i> 5:40pm</span></
                                            </p>
                                            <a id="each-event-register-button"  class="btn btn-md btn-warning" href="/event/1">View Details</a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="each-event-card d-flex flex-column">
                                            <p class="event-title">Workshop</p>
                                            <p class="date-and-time">
                                                <span><i class="far fa-calendar-alt"></i> 16/10/2020</span>
                                                <span><i class="far fa-clock"></i> 5:40pm</span></
                                            </p>
                                            <a id="each-event-register-button"  class="btn btn-md btn-warning" href="/event/1">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>


@include('/partials/footer')
		
