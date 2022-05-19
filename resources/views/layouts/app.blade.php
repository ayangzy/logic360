<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- head -->
    @include('layouts.inc.head')
</head>

<body>    
    <div class="wrapper">
        <div id="overlay" style="display:none;" onclick="return off()">
            <div id="text">
                <img src="{{ asset('assets/img/loader.svg') }}" />
            </div>
        </div>
        <div id="modal-placeholder"></div>
        <!-- header-->
        @include('layouts.inc.header')

        <!-- Sidebar -->
        @include('layouts.inc.side-bar')

        <div class="main-panel">                       
            @yield('content')
             <!-- footer -->
            @include('layouts.inc.footer')
        </div>
         
    </div>
    @include('layouts.inc.footer-scripts')
    @stack('script')
</body>

</html>
