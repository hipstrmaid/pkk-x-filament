<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <title>PKK Kelurahan Lapulu</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://fonts.cdnfonts.com/css/segoe-ui-4" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-base antialiased">
    @include('includes.header')
    <div class="min-h-screen flex flex-col h-full bg-gray-100">
        <main class="flex-grow flex flex-col gap-5">
            @yield('content')
        </main>
        @include('includes.footer')
    </div>
    <script src="{{ asset('js/menu-toggle.js') }}"></script>
</body>

</html>
