<footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col col-md-4">
  	 			<h4>ნავიგაცია</h4>
  	 			<ul>
  	 				<li><a href="#">მთავარი</a></li>
  	 				<li><a href="#">მასწავლებლები</a></li>
  	 				<li><a href="#">კონტაქტი</a></li>
  	 				<li><a href="#">ჩვენ შესახებ</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col col-md-4">
  	 			<h4>დახმარება</h4>
  	 			<ul>
  	 				<li><a href="#">ნომერი</a></li>
  	 				<li><a href="#">599539300</a></li>
  	 				<li><a href="#">მისამართი</a></li>
  	 				<li><a href="#">გოდერძი ჩოხელის I ჩიხი</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col col-md-4">
  	 			<h4>გამოგვყევით</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>

  {{-- <div class="test" >
	<div class="registration-modal">
		<h6>ავტორიზაცია</h6>
		<form>
			<div class="form-group">
			  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			</div>
			<div class="form-group">
			  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			</div>
			<div class="form-check">
			  <input type="checkbox" class="form-check-input" id="exampleCheck1">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		  </form>

	</div>

  </div> --}}
  <!-- scripts -->
	@auth
		<style>
		.without-auth{
			display: none !important;
		}
		</style>
	@else
		<style>
		.with-auth{
			display: none !important;
		}
		</style>
	@endauth

	  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
     <script>
      var swiper = new Swiper(".swiper-feedback", {
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
      var swiper = new Swiper(".mySwiper12", {
        slidesPerView: 1,
        spaceBetween:50,
        pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 50,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 50,
          },
          1390: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          1500: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          1600: {
            slidesPerView: 3,
            spaceBetween: 0,
          },
          1700: {
            slidesPerView: 4,
            spaceBetween: 0,
          },
          1800: {
            slidesPerView: 4,
            spaceBetween: 0,
          },
          1900: {
            slidesPerView: 4,
            spaceBetween: 10,
          },
        }
      });
    </script>
    <script>
      $(document).ready(function() {
			$('.minus').click(function () {
				var $input = $(this).parent().find('input');
				var count = parseInt($input.val()) - 10;
				count = count < 1 ? 1 : count;
				$input.val(count);
				$input.change();
				return false;
			});
			$('.plus').click(function () {
				var $input = $(this).parent().find('input');
				$input.val(parseInt($input.val()) + 10);
				$input.change();
				return false;
			});
		});
    </script>
	@if (count($errors) > 0)
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			<script>
				Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: {{ $error }},
				footer: '<a href="">Why do I have this issue?</a>'
				})
			</script>
		@endforeach
	@endif
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
    <script src="js/index.js"></script>
	<script src="sweetalert2.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  
	<!-- <div class="last">
		<div class="succ last container">
		<h4 class="last-text">DEVELOPED BY INTELEYE STUDIO</h4>
		<h4 class="last-text1">© Supported By tutors.ge . All Rights Reserved.</h4>
		</div>
	</div> -->