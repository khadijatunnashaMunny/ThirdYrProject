
<!DOCTYPE html>
<html lang="en">
<head>
	<title>IT Center </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="form/images/icons/favicon.ico"/>
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form/css/util.css">
	<link rel="stylesheet" type="text/css" href="form/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('form/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <span class="login100-form-title p-b-53">
						Log In
					</span>

					<div class="p-t-20 p-b-9">
                        <div>
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                        </div>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
                        <x-jet-input id="email" class="block mt-1 w-full input100" type="email" name="email" :value="old('email')" required autofocus />

						<span class="focus-input100"></span>
					</div>
					<div class="p-t-13 p-b-9">
						<span class="txt1">
                            <x-jet-label for="password" value="{{ __('Password') }}" />
						</span>

					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <x-jet-input id="password" class="block mt-1 w-full input100" type="password" name="password" required autocomplete="current-password" />

						<span class="focus-input100"></span>
					</div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
					<div class="container-login100-form-btn ">
                        <button class="login100-form-btn">
                            {{ __('Log in') }}
                        </button>
					</div>
				</form>
			</div>
		</div>
	</div>
    <x-guest-layout>
        <x-jet-authentication-card>
            <x-slot name="logo">
            </x-slot>
            <x-jet-validation-errors class="mb-4" />
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
        </x-jet-authentication-card>
    </x-guest-layout>
</body>
</html>
