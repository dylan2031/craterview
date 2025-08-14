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
    
    <!-- Mobile/Tablet Navigation -->
    <div class="d-block d-lg-none">
        @include('includes.nav-sm')
    </div>

    {{-- Message pop up if we have a message --}}
    @if(session('message'))
        @include('includes.msg-window')
    @endif

    {{-- Modal to confirm logout here --}}
    @include('includes.logout')

    <!-- Layout Container with Flexbox (Main layout structure) -->
    <div class="container-fluid g-0">
        <div class="d-flex">    
            <!-- col-2 is inisde the sidebar include-->
            @include('includes.sidebar')
            <div class="flex-grow-1 d-flex flex-column g-0">      
                @include('includes.nav')
                <div style="min-height: 85vh;">
                    @yield('content')
                    @include('ai._base')
                </div>
                @include('includes.footer')
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (needed for some Bootstrap components like modals, dropdowns) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
