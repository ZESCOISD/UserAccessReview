<!doctype html>

{{-- <!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]--> --}}
    <head>
        <meta charset="utf-8">
        <title>WOHMS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="favicon.ico">

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


        <link rel="stylesheet" href="{{asset('assets/css/slick/slick.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/slick/slick-theme.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/iconfont.css')}}">


        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!--Theme custom css -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        {{-- livewire scripts --}}
        @livewireStyles
    </head>

    <body >





        <div class="culmn">

            @yield('content')
            @yield('login')
            @yield('invoice')
            @include('layouts.footer')


        </div>

        <!-- JS includes -->
        <script src="{{asset('assets/js/vendor/jquery-1.11.2.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>
        <script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('assets/css/slick/slick.js')}}"></script>
        <script src="{{asset('assets/css/slick/slick.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.collapse.js')}}"></script>
        <script src="{{asset('assets/js/bootsnav.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
        {{-- livewire script --}}
        @livewireScripts
    </body>
</html>
