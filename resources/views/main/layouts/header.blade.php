<header class="headers">
  <div class="header-inner">
    <a href="../"><img src="../img/logo1.png" alt="" class="logo"></a>
    <svg id="bars" class="bars" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
    </svg>
    <nav class="nav-menu flex">
      <a href="/" class="nav-link">მთავარი</a>
      <a href="/teacher_list" class="nav-link">რეპეტიტორები</a>
      <a href="/books-library" class="nav-link">ბიბლიოთეკა</a>
      <a href="/profile/main" class="nav-link with-auth">პროფილი</a>
      <button  data-target="#registration" class="nav-link  without-auth" data-toggle="modal" >რეგისტრაცია</button>
      <button  data-target="#login" class="nav-link login without-auth" data-toggle="modal" >შესვლა</button>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <div class="nav-item">
            <a class="nav-link with-auth" href="{{ route('logout') }}" onclick="event.preventDefault();
                        this.closest('form').submit(); " role="button">
                <i class="fas fa-sign-out-alt"></i>
                გასვლა
            </a>
        </div>
      </form>
    </nav>
  </div>
</header>
<nav id="mobileMenu" class="mobile-menu">
      <a href="/" class="nav-link">მთავარი</a>
      <a href="/teacher_list" class="nav-link">რეპეტიტორები</a>
      <a href="/books-library" class="nav-link">რეპეტიტორები</a>
      <a href="/profile/main" class="nav-link with-auth">პროფილი</a>
      {{-- <a href="/contact" class="nav-link ">კონტაქტი</a> --}}
      {{-- <a href="/register" class="nav-link without-auth">რეგისტრაცია</a> --}}
      <button  data-target="#registration" class="nav-link  without-auth mob-nav" data-toggle="modal" >რეგისტრაცია</button>

      <button  data-target="#login" class="nav-link login without-auth mob-nav" data-toggle="modal" >შესვლა</button>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <div class="nav-item">
            <a class="nav-link with-auth" href="{{ route('logout') }}" onclick="event.preventDefault();
                        this.closest('form').submit(); " role="button">
                <i class="fas fa-sign-out-alt"></i>
                გასვლა
            </a>
        </div>
      </form>
</nav>





<script>
    const bars = document.getElementById('bars');
const mobileMenu = document.getElementById('mobileMenu');
bars.addEventListener('click', function() {
  mobileMenu.classList.toggle('active')
})



$(function () {
     var $win = $(window);

    $win.scroll(function () {
     if ($win.scrollTop() == 0)
	 $(".headers").css("background"," none");
     else{
        $(".headers").css("background"," #359ab7");
     }
               
     });
    });
</script>
@if (count($errors) > 0)
		@foreach ($errors->all() as $error)
			<script>
				Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text:  '{{ $error }}' ,
				})
                
			</script>
            <script>
                console.log({{$error}})
            </script>
		@endforeach
  @endif

  @auth
    @if (Auth::user()->user_status == 'რეპეტიტორი')
      @if (Auth::user()->school_subject == null || Auth::user()->school_status == null || Auth::user()->school_level == null || Auth::user()->name == null)
        <script>
          Swal.fire({
            icon: 'info',
            title: 'ანგარიში არარის ოფტიმიზირებული',
            text: 'გთხოვთ შეავსეთ დეტალუტი ინფორმაცია',
            footer: '<a href="/profile/edit">პროფილის რედაქტირება</a>'
          })
        </script>
      @endif
    @endif
  @endauth


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
                <form method="POST" id="login_form" action="{{ route('login') }}">
                    @csrf
                    <div>
                        <div class="form-group">
                            <label class="triangle_label" for="email_modal">ელ.ფოსტა</label>
                            <input  class="form-control triangle-input" id="email" type="email" name="email" :value="old('email')" required autofocus  >
                        </div>
                    </div>
                    <div>
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
                        <a class="resset-pass" href="../forgot-password">აღდგენა</a>
                    </div>
                    <div class="center">
                        <button class="btn-modal-submit btn login-submit" >შესვლა</button>
                        <div class="d-flex mt-2"> <h4 class="remember-text">არ გაქვთ ანგარიში?</h4><a class="resset-pass" href="/register">რეგისტრაცია</a></div>
                    </div>
                </form>
            </div>
            <div class="triangle"></div>
        </div>
    </div>
</div>




<div class="modal fade" id="registration" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="triangle-content modal-content">
            <div class="title-div"><h4 class="modals-title">რეგისტრაცია</h4></div>
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            <div class="modal-pad">
                <form method="POST" action="{{ route('register') }}"">
                    @csrf
                    <div>
                        <div class="form-group">
                            <label class="triangle_label" for="email_modal">სახელი</label>
                            <input  class="form-control triangle-input" id="name"  type="text" name="name" :value="old('name')" required autofocus autocomplete="name"  >
                        </div>
                    </div>
                    <div>
                        <div class="form-group">
                            <label class="triangle_label" for="email_modal">გვარი</label>
                            <input  class="form-control triangle-input" id="lastname"  type="text" name="lastname" :value="old('lastname')" required  >
                        </div>
                    </div>
                    <div>
                        <div class="form-group">
                            <label class="triangle_label" for="email_modal">ელ.ფოსტა</label>
                            <input  class="form-control triangle-input" id="email"  type="email" name="email" :value="old('email')" required  >
                        </div>
                    </div>
                    <div>
                        <div class="form-group">
                            <label class="triangle_label" for="email_modal">ნომერი</label>
                            <input  class="form-control triangle-input" id="number" type="number" name="number" :value="old('number')" required  >
                        </div>
                    </div>
                    <div>
                        <div class="form-group">
                            <label class="triangle_label" for="email_modal">სტატუსი</label>
                            <select class="form-control triangle-input triangle-select" name="user_status" aria-label="Default select example">
                                <option value="რეპეტიტორი">რეპეტიტორი</option>
                                <option value="მოსწავლე">მოსწავლე</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="form-group">
                            <label class="triangle_label" for="email_modal">პაროლი</label>
                            <input  class="form-control triangle-input" id="password" type="password" name="password" required autocomplete="new-password" >
                        </div>
                    </div>
                    <div>
                        <div class="form-group">
                            <label class="triangle_label" for="email_modal">პაროლი</label>
                            <input  class="form-control triangle-input" id="password_confirmation"  type="password" name="password_confirmation" required autocomplete="new-password" >
                        </div>
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
                    <div class="center">
                        <button class="btn-modal-submit btn" type="submit">რეგისტრაცია</button>
                        <div class="d-flex mt-2"> <h4 class="remember-text">უკვე გაქვთ ანგარიში?</h4><a class="resset-pass" href="/login">რეგისტრაცია</a></div>
                    </div>
                </form>
            </div>
            <div class="triangle"></div>
        </div>
    </div>
</div>

