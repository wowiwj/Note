<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
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
            @yield('content')
        </div>
        <flash message='{{ session('flash.text') }}'
                level="{{ session('flash.level') }}" >
        </flash>

    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>

    @yield('scripts')
</body>
</html>
