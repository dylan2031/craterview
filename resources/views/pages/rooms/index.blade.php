@extends('layouts.app')

@section('content')
<section class="position-relative text-center text-light">
    <img 
        src="{{ asset('images/rooms/banner.png') }}" 
        class="img-fluid w-100" 
        style="object-fit: cover; height: 80vh;" 
        alt="Room with a view"
    >

    <div class="position-absolute top-50 start-50 translate-middle w-100 px-3">
        <h1 class="g-0">Rooms</h1>
        <h5 class="mb-3">Your space to rest, relax, and recharge.</h5>
        <img src="{{ asset('images/rooms/rooms-wordart.png') }}" alt="the comfort of Earth" class="img-fluid mx-auto d-block">   
        <h5 class="mt-5">When you choose to stay with Craterview, you're getting more than just a room.</h5>
        <h5>You're securing your affordable home away from home.</h5>
    </div>
</section>
<section>
    <div class="container mt-3 text-center">
        <h3>All of our rooms are backed by our 3-star promise.</h3>
        <img src="{{ asset('images/index/stars.png') }}" class="img-fluid p-3" alt="3 out of 5 stars">
        <p><small class="text-muted fst-italic">Rated 3 stars by the Intergalactic Hotel Standards Committee</small></p>
        <p>We take pride in providing an affordable experience that meets the satisfactory standards you've come to expect, and our rooms are designed with that in mind. Each room features walls, at least one door, and a bed; all meeting 3-star standards.</p>
        <p>At Craterview, we believe comfort doesn't have to be complicated.</p>
    </div>
</section>
<hr>
<section>
    <div class="container mt-3">
            @foreach($rooms as $room)
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset('images/rooms/' . $room['image']) }}" class="card-img-top" alt="{{ $room['name'] }}">
                    </div>
                    <div class="col">
                        <h3>{{ $room['name'] }}</h3>
                        <p><i class="bi bi-person-fill"></i> Suitable for {{ $room['no_of_guests'] }} guest&lpar;s&rpar; | <i class="bi bi-cash"></i> Only Ω{{ $room['price_per_night'] }} per night</p>  
                        <p><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i><i class="bi bi-star"></i> Protected by our 3-star promise</p>
                        <p class="text-muted fst-italic">{{ $room['description'] }}</p>
                        <p>Features:</p>
                        <ul class="list-unstyled">
                            @foreach ($room['highlights'] as $highlight)
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>{{ $highlight }}</li>
                            @endforeach
                        </ul>
                        <p>...and more!</p>
                        <a href="{{ url('rooms/' . Str::slug($room['name'])) }}" class="btn xp-btn-secondary">See details</a>
                        <a href="/reservations/create" class="btn xp-btn-primary">Make a reservation</a>
                    </div>
                </div>
                <hr>
            @endforeach
    </div>
</section>
@endsection
