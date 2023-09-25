<!DOCTYPE html>
<html>
    @include('main.layouts.head')
<body id="body" class="main-body" style="overflow: hidden; background:#f5f4f9;">
    @include('main.layouts.header')
    @yield('content')
    @include('main.layouts.footer')
</body>
</html>