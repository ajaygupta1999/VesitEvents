@include('/partials/header')
@include('/partials/navbar')

<div class="our-login-page-content">
    <div id="login-container">
        <div class="login-page-contant">
            <form class="submit-forms" action="{{url('reset/check')}}" method="POST">
                @csrf
                <center><h1 class="new-h1">Password Reset</h1></center>
                <div class="form-group">
                    <label for="username"  class="label">Email</label>
                    <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Your email address"
                           name="email" required>
                </div>
                <button type="submit" class="btn btn-primary btn-md btn-block">Send Password Rest Link</button>
                <p style="text-align: center; color: red">{{session('status')}}</p>
            </form>
        </div>
    </div>
</div>

@include('/partials/footer')
