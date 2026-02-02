<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Hide in search engines for now, will remove this on a later build -->
    <meta name="robots" content="noindex, nofollow">
    
    <!-- Page Title -->
    <title>🪐 Craterview Casino and Resort</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Fonts (Comfortaa, Obritron, Work Sans) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Orbitron:wght@400..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

</head>
<body class="bg-light">

    {{-- show when page is loading --}}
    @include('includes.loading')

    {{-- Message pop up if we have a message --}}
    @if(session('message'))
        @include('includes.msg-window')
    @endif

    <!-- Fake window -->
    <header class="xp-title-bar sticky-top d-flex align-items-center position-relative">
        <img src="{{ asset('images/icons/extranet.svg') }}" width="18" height="18">
        <span class="flex-grow-1">&nbsp;Extranet Explorer © 3002 | {{ $windowTitle ?? 'Dashboard' }}</span>
        <a href="/dashboard" class="xp-close">
            <img src="{{ asset('images/icons/close.png') }}" alt="Close">
        </a>
    </header>

    <!-- App content -->
    <main class="container-fluid g-0">
        @yield('content')
    </main>

    <footer class="xp-title-bar sticky-bottom d-flex align-items-center position-fixed">

    </footer>


    <!-- Bootstrap JS (needed for some Bootstrap components like modals, dropdowns) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
