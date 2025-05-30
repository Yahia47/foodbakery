<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'FoodBakery') - {{ $siteConfig->site_name }}</title>
    <!-- Google Font Family Link Start -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800">
    <!-- Google Font Family Link End -->
    <!-- Bootstrap Link Start-->
    <meta name="description" content="{{ $siteConfig->meta_description }}">
    <meta name="keywords" content="{{ $siteConfig->meta_keywords }}">

    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="FoodBakery - Discover exceptional dining experiences.">
    <meta property="og:description" content="FoodBakery is a directory platform for multiple restaurants that provides online food ordering, table reservations, and options for delivery or pickup.">
    <meta property="og:image" content="{{ asset('opengraph-image.png') }}">
    <meta property="og:image:width" content="1280">
    <meta property="og:image:height" content="640">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="FoodBakery">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:domain" content="{{ request()->getHost() }}">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="FoodBakery - Discover exceptional dining experiences.">
    <meta name="twitter:description" content="FoodBakery is a directory platform for multiple restaurants that provides online food ordering, table reservations, and options for delivery or pickup.">
    <meta name="twitter:image" content="{{ asset('opengraph-image.png') }}">

    <link rel="icon" type="image/png" href="{{ asset('/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/apple-touch-icon.png') }}" />
    <meta name="apple-mobile-web-app-title" content="Food Bakery" />
    <link rel="manifest" href="{{ asset('/site.webmanifest') }}" />


    <link href="{{ asset('front/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/bootstrap-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/bootstrap-datepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/bootstrap-slider.css') }}" rel="stylesheet">
    <!-- Bootstrap Link End-->
    <!-- Iconmoon Link Start-->
    <link href="{{ asset('front/css/iconmoon.css') }}" rel="stylesheet">
    <!-- Iconmoon Link End-->
    <!-- Animate Link Start-->
    <link href="{{ asset('front/css/animate.css') }}" rel="stylesheet">
    <!-- Animate Link End-->
    <!-- Chosen Link Start-->
    <link href="{{ asset('front/css/chosen.css') }}" rel="stylesheet">
    <!-- Chosen Link End-->
    <!-- Swiper Link Start-->
    <link href="{{ asset('front/css/swiper.css') }}" rel="stylesheet">
    <!-- Swiper Link End-->
    <!-- Woocommerce Link Start-->
    <link href="{{ asset('front/css/woocommerce.css') }}" rel="stylesheet">
    <!-- Woocommerce Link End-->
    <!-- Pretty Photo Link Start-->
    <link href="{{ asset('front/css/prettyPhoto.css') }}" rel="stylesheet">
    <!-- Pretty Photo Link End-->
    <!-- Themes / plugin Link Start-->
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/cs-foodbakery-plugin.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/widget.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/rtl.css') }}" rel="stylesheet">
    <!-- Themes / plugin Link End-->
    <script src="{{ asset('front/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('front/js/modernizr.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.js') }}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Leaflet Core -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <!-- Leaflet Search (for address autocomplete) -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
</head>

<body>
    <!--Main Wrapper-->
    <div class="wrapper">
        <!-- ========== header Start ========== -->
        @include('front.body.header')
        <!-- header End -->

        @if (session('success'))
            <div style="z-index: 100; color: #008A2E; background-color: #ECFDF3; padding: 16px;">
                <i class="fa fa-check-circle" aria-hidden="true" style="padding-right: 5px;"></i>
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div style="z-index: 100; color: #E60000; background-color: #fff0f0; padding: 16px;">
                <i class="fa fa-exclamation-circle" aria-hidden="true" style="padding-right: 5px;"></i>
                {{ session('error') }}
            </div>
        @endif

        <!-- ============================================================== -->
        <!-- Start main Content here -->
        <!-- ============================================================== -->
        @yield('content')
        <!-- end main content-->

        <!-- ========== footer Start ========== -->
        @include('front.body.footer')
        <!-- footer End -->
    </div>

    <!-- ========== modal_popup Start ========== -->
    @include('front.buyer.body.modal_popup')
    <!-- modal_popup End -->

    <script src="{{ asset('front/js/responsive.menu.js') }}"></script>
    <script src="{{ asset('front/js/swiper.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('front/js/chosen.js') }}"></script>
    <script src="{{ asset('front/js/counter.js') }}"></script>
    <script src="{{ asset('front/js/fliters.js') }}"></script>
    <script src="{{ asset('front/js/jquery.fitvids.js') }}"></script>
    <script src="{{ asset('front/js/jquery.growl.js') }}"></script>
    <script src="{{ asset('front/js/jquery.matchHeight-min.js') }}"></script>
    <script src="{{ asset('front/js/masonry.pkgd.js') }}"></script>
    <script src="{{ asset('front/js/skills-progress.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap-slider.js') }}"></script>
    <script src="{{ asset('front/js/wow.js') }}"></script>
    <script src="{{ asset('front/js/functions-plugin.js') }}"></script>
    <script src="{{ asset('front/js/functions.js') }}"></script>

</body>

</html>
