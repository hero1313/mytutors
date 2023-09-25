
<!DOCTYPE html>
<html lang="en" >
    @include('main.layouts.head')
    <body id="body" class="main-body" style="overflow: hidden; background:#f5f4f9;">
        @include('main.layouts.header')
        <!-- lending -->
        @include('main.fragments.landing')
        <!-- lending end -->
        <!-- popularuli sagnebi -->
        @include('main.fragments.popular_course')
        <!-- popularuli sagnebi end -->
        <!-- repetitorebi mtavar gverdze -->
        @include('main.fragments.main_tutors')
        <!-- repetitorebi mtavar gverdze end -->
        <!-- user-feedback -->
        @include('main.fragments.subscribe')
        @include('main.fragments.user_feedback')
        <!-- user-feedback end -->
        @include('main.layouts.footer')
        @include('main.layouts.wizard')


<!-- Modal -->
@include('main.fragments.search_modal')


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>




