<!doctype html>
<html lang="ru">
<head>

    @if(env('APP_ENV') != 'local')
        @include('frontend.layouts.metrics')
    @endif

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    @include('frontend.layouts.styles')

    <title>{{ $page_title }}</title>

</head>

<body>

@yield('template')

@include('frontend.layouts.scripts')

@yield('module_booking')

</body>
</html>