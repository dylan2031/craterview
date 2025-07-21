@extends('layouts.app')

@section('content')
<div class="background-fade">
    @include('includes.back-button')
    <section class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ asset('images/rooms/' . $room['image']) }}" class="img-fluid rounded mb-3" alt="{{ $room['name'] }}">
            </div>
            <div class="col">
                <h1>{{ $room['name'] }}</h1>
                <p><i class="bi bi-person-fill"></i> Suitable for {{ $room['no_of_guests'] }} guest&lpar;s&rpar; | <i class="bi bi-cash"></i> Only Ω{{ number_format($room['price_per_night'], 2) }} per night</p>
                <p><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i><i class="bi bi-star"></i> Protected by our 3-star promise</p>
                <p class="text-muted fst-italic">{{ $room['description'] }}</p>
                <div class="my-3 text-light">
                    <a href="{{ route('reservations.create', ['room' => $room['type']]) }}" class="btn xp-btn-primary">Book now!</a>
                </div>
                <h3>Complete list of features:</h3>
                <ul class="list-unstyled">
                    @foreach ($room['features'] as $feature)
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i>{{ $feature }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <h3>Photo gallery</h3>
            <p>Images here are representative, but please note that each individual room or facility may have minor differences in layout, furnishings, or decor.</p>
            <div class="col-md-4">
                <img src="{{ asset('images/rooms/' . $room['display-image1']) }}" class="img-fluid rounded mb-3" alt="Additional image of {{ $room['name'] }}">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/rooms/' . $room['display-image2']) }}" class="img-fluid rounded mb-3" alt="Additional image of {{ $room['name'] }}">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/rooms/' . $room['display-image3']) }}" class="img-fluid rounded mb-3" alt="Additional image of {{ $room['name'] }}">
            </div>
        </div>
    </section>
</div>
@endsection
