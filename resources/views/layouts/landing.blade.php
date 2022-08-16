<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title') - {{ config('app.name') }}</title>
        <link href="{{ asset('argon') }}/logo/fav.png" rel="icon" type="image/png">
        <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
        <link type="text/css" href="{{ asset('argon') }}/css/home.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <link
        rel="stylesheet"
        href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css"
        type="text/css"
        />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&display=swap" rel="stylesheet"> 
        <style>
     
        </style>
        <link href="http://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet">

    </head>
    <body class="{{ $class ?? '' }}">
       
        <div class="main-content">
            @include('layouts.navbars.navs.landing')
            @yield('content')
            <a class="scrollToTopBtn"><svg width="20" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></a>
        </div>


      
        <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        @stack('js')
        
        <!-- Argon JS -->
        <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
        <script>
            var scrollToTopBtn = document.querySelector(".scrollToTopBtn"),
        rootElement = document.documentElement;
        function handleScroll() {
            var o = rootElement.scrollHeight - rootElement.clientHeight;
            0.1 < rootElement.scrollTop / o ? scrollToTopBtn.classList.add("showBtn") : scrollToTopBtn.classList.remove("showBtn");
        }
        function scrollToTop() {
            rootElement.scrollTo({ top: 0, behavior: "smooth" });
        }
        scrollToTopBtn.addEventListener("click", scrollToTop), document.addEventListener("scroll", handleScroll);
        </script>
        <script>
                        
        $(function(){
            $('.dropdown').hover(function() {
                $(this).addClass('show');
                $('.dropdown-menu').addClass('show')
            },
            function() {
                $('.dropdown-menu').removeClass('show')
                $(this).removeClass('show');
            });
        });
        </script>
        @yield('script')
    </body>
</html>