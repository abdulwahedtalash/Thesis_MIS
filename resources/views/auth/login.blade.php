<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('fontend/login/newLogin/style.css') }}">
    <title>Document</title>
</head>
<body>
    <h2>Thesis MIS : Sign in Form</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
	</div>
	<div class="form-container sign-in-container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"> <img src="{{ asset('fontend/login/newLogin/icon/facebook_32px.png') }}" alt=""> </i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"> <img src="{{ asset('fontend/login/newLogin/icon/google_logo_32px.png') }}" alt=""> </i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"> <img src="{{ asset('fontend/login/newLogin/icon/linkedin_32px.png') }}" alt=""> </i></a>
			</div>
			<span>Enter your account details.</span>
			<input type="email" placeholder="Email" name="email" class="email"  maxlength="256" :value="old('email')" required autofocus autocomplete="username"/>
			<input type="password" placeholder="Password"  name="password" class="password" required autocomplete="current-password"/>
			{{-- <a href="#">Forgot your password?</a> --}}
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
				<h1>Hello, Mr</h1>
				<p>let's see which projects is avalible. </p>
                <button class="ghost" id="signUp"> <a class="a_sign_up" href="{{ route('home') }}">Home</a> </button>
			
			</div>
		</div>
	</div>
</div>
</body>
</html>