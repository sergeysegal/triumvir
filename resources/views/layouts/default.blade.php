<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ mix("css/app.css") }}" rel="stylesheet" />
        <title>@yield('pageTitle')</title>
    </head>
    <body>
        @include('partials.header')
        @yield('content')
        <script src="{{ mix('js/app.js') }}"></script>
        @yield('scripts')
    </body>
</html>
