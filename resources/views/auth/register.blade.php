<x-guest-layout>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <div class="signup-form mt-1">	
            <form action="{{ route('register') }}" method="POST" class="mt-1">
                @csrf
                <h6 class="text-dark text-left mt-2">Welcome</h6>
                <h2 class="text-dark text-left">Sign-up an Account</h2>
                <p class="lead text-muted text-left">Please fill in this form to create an account.</p>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" id ="name" class="form-control" name="name" placeholder="Surname, First Name" :value="old('name')" required autofocus autocomplete="name">
        
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
                        <input type="email" class="form-control" name="email" placeholder="Email Address" :value="old('email')" required id="email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input  class="form-control" type="password" name="password" required autocomplete="new-password" placeholder="Pasword">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-lock"></i>
                            <i class="fa fa-check"></i>
                        </span>
                        <input  id="password_confirmation" class="form-control" type="password" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>    
                <div class="form-group">
                    <label class="form-check-label"><input type="checkbox" required="required"> I agree to the <a href="#">Terms of Service</a> &amp; <a href="#">Privacy Policy</a></label>
                </div>    
                <div class="form-group">
                    <x-jet-button class="btn btn-light btn-block btn-lg text-light">
                        {{ __('Register') }}
                    </x-jet-button>
                </div>
            </form>
            <div class="text-center">Already have an account? <a href="{{ route('login') }}">Login here</a>.</div>
        </div>
</x-guest-layout>
