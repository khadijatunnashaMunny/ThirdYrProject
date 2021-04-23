{{-- 

	<div class="limiter">
		<div class="container-login100" style="background-image: url('form/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                <x-jet-form-section submit="updatePassword">
                    <x-slot name="title">
                        {{ __('Update Password') }}
                    </x-slot>

                    <x-slot name="description">
                        {{ __('Ensure your account is using a long, random password to stay secure.') }}
                    </x-slot>
                <x-slot name="form">


					<div class="p-t-31 p-b-9">
                        <div>
                            <x-jet-label for="current_password" value="{{ __('Current Password') }}" />
                        </div>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
                        <x-jet-input id="current_password" type="password" class="mt-1 block w-full input100" wire:model.defer="state.current_password" autocomplete="current-password" />
						<span class="focus-input100"></span>
					</div>
					<div class="p-t-13 p-b-9">
						<span class="txt1">
                            <x-jet-label for="password" value="{{ __('New Password') }}" />
						</span>

					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <x-jet-input id="password" type="password" class="mt-1 block w-full input100" wire:model.defer="state.password" autocomplete="new-password" />
                        <x-jet-input-error for="password" class="mt-2" />

					</div>
                    <div class="p-t-13 p-b-9">
						<span class="txt1">
                            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
						</span>

					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <x-jet-input id="password_confirmation" type="password" class="mt-1 block w-full input100" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
                        <x-jet-input-error for="password_confirmation" class="mt-2" />

					</div>

                </x-slot>

					<div class="container-login100-form-btn ">
                        <x-slot name="actions">
                            <x-jet-action-message class="mr-3" on="saved">
                                {{ __('Saved.') }}
                            </x-jet-action-message>

                            <x-jet-button>
                                {{ __('Save') }}
                            </x-jet-button>
                        </x-slot>
                    </x-jet-form-section>


					</div>
            </div>
		</div>
	</div> --}}
