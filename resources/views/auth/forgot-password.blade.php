

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
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <span class="login100-form-title p-b-53">
				      FORGOT PASSWORD?
					</span>
                    <div class="mb-4 text-sm text-gray-600">
                        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                    </div>

					<div class="p-t-31 p-b-9">
                        <div>
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                        </div>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
                        <x-jet-input id="email" class="block mt-1 w-full input100" type="email" name="email" :value="old('email')" required autofocus />
					</div>

                    <div class="flex items-center justify-end mt-4">
                        <x-jet-button>
                            {{ __('Email Password Reset Link') }}
                        </x-jet-button>

					</div>

				</form>
			</div>
		</div>
	</div>

    <x-guest-layout>
        <x-jet-authentication-card>
            <x-slot name="logo">
            </x-slot>
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

        </x-jet-authentication-card>
    </x-guest-layout>

</body>
</html>
