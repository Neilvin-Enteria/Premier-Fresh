<x-guest-layout>
    <div class="signup-form mt-5">
        <form action="{{ route('login') }}" method="post" class="mt-1">
            @csrf
            <div class="form-data">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="text-dark" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
                <div class="form-group mt-4">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input id="email" class="form-control" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input id="password" class="form-control" type="password" name="password" placeholder="Password" required autocomplete="current-password">
                    </div>
                </div>
                <input type="submit" class="btn btn-primary btn-block btn-lg" value="Login">
        </form>
        <hr data-content="OR" class="hr-text">
        <div class="form-data">
    
        </div>
        <div class="flex items-center m-3">
            <a href="{{ url('authorized/google') }}">
                <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png" style="margin-left: 3em;">
            </a>
        </div>
        </div>
        <div class="text-center">Doesn't have an account yet? <a href="{{ route('register') }}">Sign up here!</a></div>
</x-guest-layout>

