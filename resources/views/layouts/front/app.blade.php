<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Find Houses - HTML5 Template</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front/favicon.ico') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ asset('front/') }}/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{ asset('front/') }}/css/font-awesome.min.css">
    <!-- LEAFLET MAP -->
    <link rel="stylesheet" href="{{ asset('front/') }}/css/leaflet.css">
    <link rel="stylesheet" href="{{ asset('front/') }}/css/leaflet-gesture-handling.min.css">
    <link rel="stylesheet" href="{{ asset('front/') }}/css/leaflet.markercluster.css">
    <link rel="stylesheet" href="{{ asset('front/') }}/css/leaflet.markercluster.default.css">
    <!-- Slider Revolution CSS Files -->
    <link rel="stylesheet" href="{{ asset('front/') }}/revolution//css/settings.css">
    <link rel="stylesheet" href="{{ asset('front/') }}/revolution//css/layers.css">
    <link rel="stylesheet" href="{{ asset('front/') }}/revolution//css/navigation.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{ asset('front/') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('front/') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('front/') }}/css/lightcase.css">
    <link rel="stylesheet" href="{{ asset('front/') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('front/') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('front/') }}/css/menu.css">
    <link rel="stylesheet" href="{{ asset('front/') }}/css/slick.css">
    <link rel="stylesheet" href="{{ asset('front/') }}/css/styles.css">
    <link rel="stylesheet" id="color" href="{{ asset('front/') }}/css/default.css">

</head>

<body>

<div id="wrapper">

    <!-- START SECTION HEADINGS -->
    @include('front.includes.header')

    @yield('content')

   @include('front.includes.footer')

    <!-- START PRELOADER -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>
    <!-- END PRELOADER -->

    <!-- ARCHIVES JS -->
    <script src="{{ asset('front/') }}/js/jquery.min.js"></script>
    <script src="{{ asset('front/') }}/js/jquery-ui.js"></script>
    <script src="{{ asset('front/') }}/js/tether.min.js"></script>
    <script src="{{ asset('front/') }}/js/moment.js"></script>
    <script src="{{ asset('front/') }}/js/transition.min.js"></script>
    <script src="{{ asset('front/') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('front/') }}/js/mmenu.min.js"></script>
    <script src="{{ asset('front/') }}/js/mmenu.js"></script>
    <script src="{{ asset('front/') }}/js/slick.min.js"></script>
    <script src="{{ asset('front/') }}/js/slick3.js"></script>
    <script src="{{ asset('front/') }}/js/fitvids.js"></script>
    <script src="{{ asset('front/') }}/js/jquery.waypoints.min.js"></script>
    <script src="{{ asset('front/') }}/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('front/') }}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('front/') }}/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('front/') }}/js/smooth-scroll.min.js"></script>
    <script src="{{ asset('front/') }}/js/lightcase.js"></script>
    <script src="{{ asset('front/') }}/js/owl.carousel.js"></script>
    <script src="{{ asset('front/') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('front/') }}/js/ajaxchimp.min.js"></script>
    <script src="{{ asset('front/') }}/js/newsletter.js"></script>
    <script src="{{ asset('front/') }}/js/jquery.form.js"></script>
    <script src="{{ asset('front/') }}/js/jquery.validate.min.js"></script>
    <script src="{{ asset('front/') }}/js/forms-2.js"></script>
    <script src="{{ asset('front/') }}/js/leaflet.js"></script>
    <script src="{{ asset('front/') }}/js/leaflet-gesture-handling.min.js"></script>
    <script src="{{ asset('front/') }}/js/leaflet-providers.js"></script>
    <script src="{{ asset('front/') }}/js/leaflet.markercluster.js"></script>
    <script src="{{ asset('front/') }}/js/map4.js"></script>
    <script src="{{ asset('front/') }}/js/color-switcher.js"></script>

    <!-- Slider Revolution scripts -->
    <script src="{{ asset('front/') }}/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="{{ asset('front/') }}/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="{{ asset('front/') }}/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="{{ asset('front/') }}/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="{{ asset('front/') }}/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="{{ asset('front/') }}/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="{{ asset('front/') }}/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="{{ asset('front/') }}/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="{{ asset('front/') }}/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="{{ asset('front/') }}/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="{{ asset('front/') }}/revolution/js/extensions/revolution.extension.video.min.js"></script>

    <!-- MAIN JS -->
    <script src="{{ asset('front/') }}/js/script.js"></script>

</div>
</body>

</html>
