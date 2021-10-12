<!DOCTYPE html>
@langrtl
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
@else
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@endlangrtl
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', app_name())</title>
        <meta name="description" content="@yield('meta_description', 'Laravel Boilerplate')">
        <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
        @yield('meta')

        {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
        @stack('before-styles')
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link href="{{ url('css/styles.css') }}" rel="stylesheet"">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->
        {{ style(mix('css/frontend.css')) }}

        @stack('after-styles')
    </head>
    <body>
        @include('includes.partials.read-only')

        <!-- <div id="loading">
            <div id="earth"></div>

            <div class="container" style="z-index: 9999; margin-top: 1rem;">
                <div class="row justify-content-center">
                    <div class="col-6 text-center">
                        <div class="name" data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1000">
                            <p style="font-family: lora; font-size:2rem; line-height:0.75; color: white; z-index: 9999999;">KAYAK</p>
                            <p class="mt-2" style="font-family: lora; font-size:1rem; color: #FFFFFF">SURGI PHARMA</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div> -->
            
        <div id="app">
            @include('includes.partials.logged-in-as')
            @include('frontend.includes.nav')

            @include('includes.partials.messages')
            
            @yield('content')

            @include('frontend.includes.footer')
            
        </div><!-- #app -->

        <!-- Scripts -->
        @stack('before-scripts')

        {!! script(mix('js/manifest.js')) !!}
        {!! script(mix('js/vendor.js')) !!}
        {!! script(mix('js/frontend.js')) !!}

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

        <script>
            $(document).ready(function(){
                setTimeout(function(){
                    $("#loading").css('display', 'none');
                }, 5000);
            });
        </script>

        @stack('after-scripts')

        @include('includes.partials.ga')
    </body>
</html>
