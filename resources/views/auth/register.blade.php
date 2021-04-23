
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
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-20">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <span class="login100-form-title ">
						Registration
					</span>
					<div class="p-t-10 p-b-5">
                        <div>
                            <x-jet-label for="name" value="{{ __('Name') }}" />
                        </div>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
                        <x-jet-input id="name" class="block mt-1 w-full input100" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
					</div>

                    <div class="p-t-13 p-b-5">
                        <div>
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                        </div>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
                        <x-jet-input id="email" class="block mt-1 w-full input100" type="email" name="email" :value="old('email')" required />
					</div>

					<div class="p-t-13 p-b-5">
						<span class="txt1">
                            <x-jet-label for="password" value="{{ __('Password') }}" />
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <x-jet-input id="password" class="block mt-1 w-full input100" type="password" name="password" required autocomplete="new-password" />
					</div>

                    <div class="p-t-13 p-b-5">
						<span class="txt1">
                            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <x-jet-input id="password_confirmation" class="block mt-1 w-full input100" type="password" name="password_confirmation" required autocomplete="new-password" />
					</div>
                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms"/>

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                @endif

                <div class="flex items-center justify-end mt-4 ">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                    <button class="login100-form-btn">
                        {{ __('Register') }}
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
        </x-jet-authentication-card>
    </x-guest-layout>

</body>
</html>
