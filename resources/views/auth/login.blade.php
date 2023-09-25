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
			      			        <h3 class="mb-4">შესვლა</h3>
			      		        </div>
								<!-- <div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div> -->
			      	        </div>
                            <x-jet-validation-errors class="mb-4" />
                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('login') }}">
                            @csrf
                                <div>
                                    <x-jet-label for="email" value="{{ __('იმეილი') }}" />
                                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                </div>
                                <div class="mt-4">
                                    <x-jet-label for="password" value="{{ __('პაროლი') }}" />
                                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                                </div>
                                <div class="block mt-4">
                                    <label for="remember_me" class="flex items-center">
                                        <x-jet-checkbox id="remember_me" name="remember" />
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                    </label>
                                </div>
                                <div class="flex items-center justify-end mt-4">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                                    <x-jet-button class="ml-4">
                                        {{ __('Log in') }}
                                    </x-jet-button>
                                </div>
                            </form>
		                    <p class="text-center"> <a data-toggle="tab" href="../register">რეგისტრაცია</a></p>
		                </div>
		            </div>
				</div>
			</div>
		</div>
	</section>
	</body>
</html>
<div class="none" style="display:none">
<x-guest-layout style="display:none;">
</x-guest-layout>
</div>

<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="triangle-content modal-content">
        <div class="title-div"><h4 class="modals-title">შესვლა</h4></div>
        
    @if (session('status'))
          <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
          </div>
    @endif
    <div class="modal-pad">
        <form method="POST" action="{{ route('login') }}">
            @csrf
                <div>
                    <div class="form-group">
                        <label class="triangle_label" for="email_modal">ელ.ფოსტა</label>
                        <input  class="form-control triangle-input" id="email" type="email" name="email" :value="old('email')" required autofocus  >
                    </div>
                </div>
                <div class="">
                    <div class="form-group">
                        <label class="triangle_label" for="email_modal">პაროლი</label>
                        <input  class="form-control triangle-input" id="password"  type="password" name="password" required autocomplete="current-password" >
                    </div>
                </div>
                <div class="flex remember-div ">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox class="remember" id="remember_me" name="remember" />
                        <span class="remember-text">დამახსოვრება</span>
                    </label>
                    <a class="resset-pass" href="">აღდგენა</a>
                </div>
                <div class="center">
                    <button class="btn-modal-submit btn" type="submit">შესვლა</button>
                    <div class="d-flex mt-2"> <h4 class="remember-text">არ გაქვთ ანგარიში?</h4><a class="resset-pass" href="../register">რეგისტრაცია</a></div>
                </div>
            </form>
    </div>
    
        <div class="triangle"></div>
    </div>
    </div>
  </div>
  <div style="width:300px">
    <div class="form-group">
        <label class="triangle_label" for="email_modal">Email address</label>
        <input type="email" class="form-control triangle-input" id="email_modal" >
    </div>
</div>

