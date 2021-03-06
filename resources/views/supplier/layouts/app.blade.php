<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div>
        <heaader>
            <nav>
                <h1>入庫先名</h1>
                <ul>
                    <li><a href="{{ url("/supplier/ordering") }}">発注一覧</a></li>
                    <li><a href="{{ url("/supplier/shipped") }}">出庫済み一覧</a></li>
                </ul>
            </nav>
        </heaader>
        <div>
            @yield('content')
        </div>
    </div>
</body>
</html>
