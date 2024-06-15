<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <title>FlexStart Bootstrap Template - Index</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
      
        <!-- Favicons -->
        <link href="{{ asset('img/landing/favicon.png') }}" rel="icon">
        <link href="{{ asset('img/landing/apple-touch-icon.png') }}" rel="apple-touch-icon">
      
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      
        <!-- Vendor CSS Files -->
        <link href="{{ asset('vendor/landing/aos/aos.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/landing/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/landing/bootstrap-icons/bootstrap-icons.css') }} rel="stylesheet">
        <link href="{{ asset('vendor/landing/glightbox/css/glightbox.min.css') }}rel="stylesheet">
        <link href="{{ asset('vendor/landing/remixicon/remixicon.css') }} rel="stylesheet">
        <link href="{{ asset('vendor/landing/swiper/swiper-bundle.min.css') }} rel="stylesheet">
      
        <!-- Template Main CSS File -->
        <link href="{{ asset('css/landing/style.css') }}" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        @livewireScripts
    </body>
</html>
