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
<body class="bg-light d-flex flex-column vh-100" style="border-left: 4px solid #1d4e89; border-right: 4px solid #1d4e89;">

    <!-- Header -->
    <header class="xp-title-bar d-flex align-items-center">
        <img src="{{ asset('images/icons/extranet.svg') }}" width="18" height="18">
        <span class="flex-grow-1">&nbsp;The Daily Triumph © 3002 - {{ $windowTitle ?? 'Article Viewer' }}</span>
        <a href="/dashboard" class="xp-close">
            <img src="{{ asset('images/icons/close.png') }}" alt="Close" class="me-1 close">
        </a>
    </header>
    <main class="flex-grow-1 overflow-auto container-fluid g-0" style="background-color: #808080;">
        <div class="container newspaper-text">
            <div class="text-center newspaper-header">
                <h1 class="newspaper-head">THE DAILY TRIUMPH</h1>
                <img src="{{ asset('images/news/triumph.webp') }}" class="img-fluid w-25" alt="Newspaper Logo">
                <p class="newspaper-sub">KEEPING MARS INFORMED SINCE 2964</p>
                <p><small class="text-light">Published 1st December 3002</small></p>
            </div>
        <article class="news-body">
            {{-- this is the article itself --}}
            @yield('content')
        </article>
        </div>
    </main>


    <!-- Footer -->
    <footer class="xp-title-bar d-flex align-items-center px-2" style="height: 40px;">
        <!-- footer content -->
    </footer>


    <!-- Bootstrap JS (needed for some Bootstrap components like modals, dropdowns) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
