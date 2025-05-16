<!doctype html>
<html class="no-js" lang="zxx">
@include('frontend.layouts.partials.head')

<body>

<!-- Preloader Start -->
@include('frontend.layouts.partials.navbar')
@yield('content')
@include('frontend.layouts.partials.footer')

<!-- JS here -->
@include('frontend.layouts.partials.scripts')

</body>

</html>
