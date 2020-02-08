<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ mix("css/app.css") }}" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('icon-assets/framework7/css/framework7-icons.css')}}">
        <link rel="stylesheet" href="{{asset('icon-assets/fontawesome/css/all.min.css')}}">
        @yield('styles')
        <title>@yield('pageTitle')</title>
    </head>
    <body>
        @include('partials.header')
        <div id="app">@yield('content')</div>
        <div class="spacer"></div>
        @include('partials.footer')
    <script src="{{ mix('js/app.js') }}"></script>
        @yield('scripts')
    </body>
</html>
