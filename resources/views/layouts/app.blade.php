<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'РСО Севастополь')</title>
    <meta name="description" content="@yield('description', 'Российские студенческие отряды Севастополя - с нами ты можешь больше!')">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/LogoSevRO.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/LogoSevRO.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/LogoSevRO.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <meta name="theme-color" content="#1d4ed8">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @stack('styles')
</head>
<body class="bg-gray-50 dark:bg-gray-900 font-sans antialiased">
    <!-- Navigation -->
    @include('layouts.navigation')

    <!-- Main Content -->
    <main class="relative">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('layouts.footer')

    <!-- Toast Container (будет добавлен через JavaScript) -->
    
    @stack('scripts')
</body>
</html>