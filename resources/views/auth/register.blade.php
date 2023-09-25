@include('main.layouts.head')
	<body>
	<section class="ftco-section">
		    <div class="container">
			    <div class="row justify-content-center">
				    <div class="col-md-12 col-lg-10">
                        <div class="wrap d-md-flex">
                            <div class="img" style="background-image: url(img/bg-1.jpg);"></div>
                            <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">რეგისტრაცია</h3>
                                </div>
                                <!-- <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                        <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                                    </p>
                                </div> -->
                            </div>
                            <script src="sweetalert2.all.min.js"></script>

                            <x-jet-validation-errors class="mb-4" />
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div>
                                        <x-jet-label for="name" value="{{ __('სახელი') }}" />
                                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                    </div>
                                    <div>
                                        <x-jet-label for="lastname" value="{{ __('გვარი') }}" />
                                        <x-jet-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required  />
                                    </div>
                                    <div>
                                        <x-jet-label for="email" value="{{ __('იმეილი') }}" />
                                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required  />
                                    </div>
                                    <div class="mt-4">
                                        <x-jet-label for="number" value="{{ __('ნომერი') }}" />
                                        <x-jet-input id="number" class="block mt-1 w-full" type="number" name="number" :value="old('number')" required />
                                    </div>
                                    <div>
                                        <x-jet-label for="user_status" value="{{ __('მომხმარებლის სტატუსი') }}" />
                                        <select class="form-select mt-1 w-full " name="user_status" aria-label="Default select example">
                                            <option value="რეპეტიტორი">რეპეტიტორი</option>
                                            <option value="მოსწავლე">მოსწავლე</option>
                                        </select>
                                    </div>
                                    <div class="mt-4">
                                        <x-jet-label for="password" value="{{ __('პაროლი') }}" />
                                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                    </div>
                                    <div class="mt-4">
                                        <x-jet-label for="password_confirmation" value="{{ __('გაიმეორეთ პაროლი') }}" />
                                        <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
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
                                    <div class="flex items-center justify-end mt-4">
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                            {{ __('Already registered?') }}
                                        </a>
                                        <x-jet-button class="ml-4">
                                            {{ __('Register') }}
                                        </x-jet-button>
                                    </div>
                                </form>
                                <p class="text-center"> <a data-toggle="tab" href="../login">შესვლა</a></p>
                            </div>
		                </div>
			        </div>
			    </div>
		    </div>
	</section>
	<script src="js/jquery.min.js"></script>
	</body>
</html>
<div class="none" style="display:none">
<x-guest-layout style="display:none;">
</x-guest-layout>
</div>