  <div class="succ">
      <h5 class="div-2">რეპეტიტორები</h5>
      <div class="all">
        <h5 class="up">რჩეული რეპეტიტორი </h5>
      </div>
      @if (session('status'))
                <div class="alert alert-danger">
                    {{ session('status') }}
                </div>
      @endif
      <div class="swiper mySwiper21">
        <div class="swiper-wrapper wrap-pad">
            @foreach($users as $user)
            <div class="swiper-slide" >
                <div class="" >
                    <a href="../user/{{$user->id}}">
                        <div class="card light-shadow shadow-none">
                                <div class="card-headers flex">
                                    <img src="../img/{{$user->photo}}" alt="" class="card-img">
                                    <span class="card-name">{{$user->name}}</span>
                                    <div class="card-gul">
                                        <svg class="heart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z"/></svg>
                                    </div>
                                </div>
                                    <hr class="card-hr">
                                    <div class="card-desc flex">
                                        <h6 class="card-title">საგანი</h6>
                                        <h6 class="card-content">{{$user->school_subject}}</h6>
                                    </div>
                                    <div class="card-desc flex">
                                        <h6 class="card-title">ქალაქი</h6>
                                        <h6 class="card-content">{{$user->country}}</h6>
                                    </div>
                                </a>
                                    <div class="card-bottom flex">
                                            <button class="btn btn-reservation" >დაჯავშნა</button>
                                        <div class="card-price">
                                            <h6 class="price-h6">₾ {{$user->price}}</h6>
                                        </div>
                                    </div>
                        </div>        
                </div>
            </div>
            @include('main.fragments.reservation_modal')
        @endforeach
        </div>
        <div class="swiper-pagination next"></div>  
      </div>
  </div>
  <br>
  <script>
    var swiper = new Swiper(".mySwiper21", {
    slidesPerView: 1,
    spaceBetween: 30,
    freeMode: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
     420: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      500: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      1200: {
        slidesPerView: 4,
        spaceBetween: 20,
      },}
  });
  </script>