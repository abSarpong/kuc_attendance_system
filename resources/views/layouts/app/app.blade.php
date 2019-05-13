<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">



    <title>Attendace System | @yield('title')</title>
    
    <!-- Styles -->
    <link href="{{ asset('/assets/css/semantic.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/foundation.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/template.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,400|Heebo:100,300,400|Dosis:200,400,600|Muli:200,400,600,700,800|Oxygen:300,400,700|PT+Sans+Narrow:400,700" rel="stylesheet">
    
    @yield('inline-css')
</head>
<body>

    <div id="app">
        @yield('modal')

            <!-- <main class="wrapper"> -->
            
                @include('includes.header')

                <div class="app-content-area" style="position: relative; top: -150px; height: 1500px;">

                    <div class="row expanded">
                        <div class="columns large-centered large-11">

                            @include('includes.nav')

                            @yield('main-content')

                        </div>
                    </div>

                </div>

                @include('includes.footer')

            <!-- </main> -->
    </div>

    <!-- JS Script Files -->
    <script src="{{ asset('/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('/assets/js/semantic.min.js') }}"></script>
    <script src="{{ asset('/assets/js/foundation.min.js') }}"></script>
    <script src="{{ asset('/assets/js/app.js') }}"></script>


    @yield('external-script')

</body>

<script>
    $('.ui.dropdown')
    .dropdown();
</script>

</html>
