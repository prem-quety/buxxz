<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Theme Styles -->
    <link rel="stylesheet" href="{{ asset('assets/icons/iconly/index.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icons/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icons/flaticon/flaticon_pixio.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icons/themify/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icons/line-awesome/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icons/feather/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/niceselect/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/nouislider/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/lightgallery/dist/css/lightgallery.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/lightgallery/dist/css/lg-thumbnail.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/lightgallery/dist/css/lg-zoom.css') }}">

    <!-- Main Theme Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">

    <div class="page-wraper">

        {{-- Preloader --}}
        <div id="loading-area" class="items-center fixed z-[999999] left-0 top-0 size-full flex justify-center duration-1000
             bg-center bg-[length:150px] bg-no-repeat backdrop-blur-md
             [background:linear-gradient(180deg,_#feeb9d_0%,_#fffaf3_100%)] preloader-wrapper-2">
            <div class="w-[150px] h-13.5 border-b-4 border-secondary relative loader"></div>
        </div>

        {{-- Header --}}
        @include('layouts.navigation')

        {{-- Page Content --}}
        <main>
            @yield('content')
        </main>

        {{-- Footer --}}
        @include('layouts.footer')

    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/counter/waypoints-min.js') }}"></script>
    <script src="{{ asset('assets/vendor/counter/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/magnific-popup/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.js') }}"></script>
    <script src="{{ asset('assets/vendor/masonry/masonry-4.2.2.js') }}"></script>
    <script src="{{ asset('assets/vendor/masonry/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/countdown/jquery.countdown.js') }}"></script>
    <script src="{{ asset('assets/vendor/wnumb/wNumb.js') }}"></script>
    <script src="{{ asset('assets/vendor/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/lightgallery/dist/lightgallery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/lightgallery/dist/plugins/thumbnail/lg-thumbnail.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/lightgallery/dist/plugins/zoom/lg-zoom.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/niceselect/js/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('assets/vendor/alpine/alpineplugin.js') }}"></script>
    <script src="{{ asset('assets/vendor/alpine/alpine.js') }}"></script>
    <script src="{{ asset('assets/js/dz.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/dz.ajax.js') }}"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/group-slide/group-loop.js') }}"></script>
</body>

</html>