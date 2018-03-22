
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title',config('app.name','Blog'))@hasSection('title') - {{config('app.name','Blog')}}@endif</title>
    <meta name="description" content="{{ config('note.meta.description') }}">
    <meta name="keywords" content="{{ config('note.meta.keywords') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <script>
        window.App = @json([
            'user' => Auth()->user(),
            'csrfTtoken' => csrf_token(),
            'signedIn' => Auth::check()

        ])
    </script>

    @yield('styles')
</head>
<body>
    <div id="app">


        @include('layouts.partials.nav')

        @yield('banner');

        <div class="container">

            @include('flash::message')

            @yield('content')

        </div>


        <flash message='{{ session('flash.text') }}'
                level="{{ session('flash.level') }}" >
        </flash>

        @guest
            <login-view github-auth-url="{{ route('oauth.redirect','github') }}" qq-auth-url="{{ route('oauth.redirect','qq') }}"></login-view>
        @endguest

        @include('layouts.partials.footer')

    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/manifest.js') }}"></script>
    <script src="{{ mix('js/vendor.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script>

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
