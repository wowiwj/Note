<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="keywords" content="{{ config('note.meta.keywords') }}">
    <meta name="description" content="{{ config('note.meta.description') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title',config('app.name','Blog'))@hasSection('title') - {{config('app.name','Blog')}}@endif</title>
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <script>
        window.App = {!!
            json_encode([
                'user' => Auth()->user(),
                'csrfTtoken' => csrf_token(),
                'signedIn' => Auth::check()

            ]);

        !!};
    </script>

    @yield('styles')
</head>
<body>
    <div id="app">

        @include('layouts.partials.nav')

        <div class="container">
            @include('flash::message')
            @yield('content')
        </div>


        <flash message='{{ session('flash.text') }}'
                level="{{ session('flash.level') }}" >
        </flash>

        @include('layouts.partials.footer')

    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
        $('#flash-overlay-modal').modal();
        $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    </script>

    @yield('scripts')

    @if(config('note.google_analytics'))
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', '{{ config('note.google_analytics') }}', 'auto');
            ga('send', 'pageview');
        </script>
    @endif


</body>
</html>
