<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>Market price reviewer</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/bootstrap.min.css') }}" media="all" />
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/font-awesome.min.css') }}" media="all"/> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/bootstrap-grid.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/bootstrap-reboot.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/font-techmarket.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/slick.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/techmarket-font-awesome.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/slick-style.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/animate.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/style.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/colors/blue.css') }}" media="all" />

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,900" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav-icon.png">

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}
            , Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script")
                , s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/631f29ac54f06e12d8942ebb/1gcos9653';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();

    </script>
    <!--End of Tawk.to Script-->
</head>
<body class="woocommerce-active full-width">

    <!-- ====================== Top Header ================================= -->
    @include('front.layouts.inc.top-header')

    <!-- =================================== Header ================== -->
    @include('front.layouts.inc.header')

    <div id="page" class="hfeed site">
        @yield('content')

        @include('front.layouts.inc.footer')
    </div>

    <script type="text/javascript" src="{{ asset('front/assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/assets/js/tether.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/assets/js/jquery-migrate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/assets/js/hidemaxlistitem.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/assets/js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/assets/js/hidemaxlistitem.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/assets/js/jquery.easing.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/assets/js/scrollup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/assets/js/jquery.waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/assets/js/waypoints-sticky.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/assets/js/pace.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/assets/js/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/assets/js/scripts.js') }}"></script>
</body>
</html>
