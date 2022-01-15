<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Vandertech') }}</title>

    {{-- Fonts --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&display=swap" rel="stylesheet">

    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- Swiper Slide --}}
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">

    {{-- Scripts --}}
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{-- Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>

    <style>
        .background-img {
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .font-heading {
            font-family: 'Merriweather', serif;
        }

        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>

    @stack('styles')

</head>
<body class="font-sans antialiased">

    @yield('content')

    {{-- Swiper Slide --}}
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>

    @stack('scripts')

</body>
</html>
