<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>mepolis inc</title>

    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest') }}" />
    <meta name="description" content="onpoint HTML 5 Template " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/custom-animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/jarallax/jarallax.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/odometer/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/swiper/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/onpoint-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-select/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/nice-select/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-ui/jquery-ui.css') }}">

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/onpoint.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/onpoint-responsive.css') }}">

</head>

<body>
    <noscript>
        <META HTTP-EQUIV="Refresh" CONTENT="0;https://www.enable-javascript.com/">
    </noscript>
    @include('layouts.includes.header')
    <main>
        @section('main-content')
        @show
    </main>
    @if(View::hasSection('footer-type') && view()->yieldContent('footer-type') == 'footer2')
          @include('layouts.includes.footer2')
    @else
        @include('layouts.includes.footer')
    @endif

    @yield('styles')
    <script src="{{ asset('assets/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('assets/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery.circle-type/jquery.circleType.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery.circle-type/jquery.lettering.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/nice-select/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/marquee/marquee.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/sidebar-content/jquery-sidebar-content.js') }}"></script>

     <!-- template js -->
    <script src="{{ asset('assets/js/onpoint.js') }}"></script>
    @yield('scripts')
</body>

</html>
