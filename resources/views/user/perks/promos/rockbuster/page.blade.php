@extends('layouts.dash-window')

@section('content')
    <nav class="navbar" style="background:#020088;">
        <div class="container mx-2">
            <a class="navbar-brand text-white" href="#">
                <img src="{{ asset('images/promos/rockbuster.webp') }}" alt="Rockbuster" width=64px height=64px>
            </a>
        </div>
    </nav>
    <div class="text-center mx-2">
        <h1 class="display-3 mt-5 mb-3" style="font-family: 'Comfortaa', sans-serif;">UNAVAILABLE ON YOUR PLANET</h1>
        <p>Rockbuster is currently unavailable on your planet due to unresolved licensing disputes and multiple copyright violations across several colonial territories.</p>
        <p>We apologise for any inconvenience caused during this suspension of distribution operations, and aim to resume normal operations as soon as we are able.</p>
        <div class="d-flex flex-md-row justify-content-center gap-3 text-light mx-auto">
            <a href="javascript:history.back()" class="btn xp-btn-secondary">GO BACK</a>
        </div>
    </div>
@endsection