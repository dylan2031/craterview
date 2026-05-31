@extends('layouts.dash-window')

@section('content')

<div class="space-bg">
    <div class="container pt-2 pb-4 text-light text-shadow-yellow">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 mb-4 mb-md-0">
                <img src="{{ asset('images/promos/if.webp') }}" class="img-fluid d-block mx-auto p-4" alt="Infinity Lounge" decoding="async">
                <p class="text-center fw-bold" style="font-family: "Comfortaa", sans-serif;">Located inside the casino and open 24/7</p>
            </div>
            <div class="col-12 col-md-6 text-center p-4">
                <h5 class="text-shadow-yellow">3-Star Promise</h5>
                @include('includes.stars-no-copy')
                <p>
                    <small>Quality and standards guarantee</small>
                </p>
                <p class="ms-2 me-2">
                    Infinity Lounge&trade; is proud to uphold and deliver on our
                    3-star promise, taking pride in providing an affordable
                    experience that meets the satisfactory standards you've come
                    to expect.
                </p>
            </div>
        </div>
        <div class="text-center mt-4">
            @yield('content2')
        </div>
    </div>
</div>

@endsection