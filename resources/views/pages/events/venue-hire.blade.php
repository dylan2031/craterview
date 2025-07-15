@extends('layouts.app')

@section('content')
    <section class="background-fade">
        @include('includes.back-button')
        <div class="container text-center mb-4">
            <h3>Venue hire</h3>
            <p>Craterview is pleased to offer a diverse selection of functional event spaces that deliver on our trusted 3-star promise. Whether your event is small or large, corporate or personal, we have a venue to suit every occasion and every budget.</p>
            <img src="{{ asset('images/index/stars.png') }}" class="img-fluid mb-3" alt="3 out of 5 stars">
            <p>Thanks to exclusive sponsorship deals with our valued partners, we offer unbeatable prices, ensuring exceptional value without compromising on comfort or quality. Our practical, well-equipped spaces are designed to make your event seamless and memorable, all without breaking the bank.</p>
            <p class="mb-0">This would not be possible without our good friends at <span class="fw-bold">Domino Cigarettes Ltd</span> and other proud sponsors.
        </div>
    </section>
    <hr>
    <br>
    <section>
        <div class="container">
            <div class="text-center mb-6">
                <h3>Browse venues</h3>
                <p>Exact prices are not listed as our sales team will assess your individual needs and budget to give you the best price possible.</p>
                <br>
            </div>
            @foreach($venues as $venue)
                <div class="row">
                    <div class="col-lg-5">
                        <img src="{{ asset('images/events/' . $venue['image']) }}" class="card-img-top" alt="{{ $venue['name'] }}">
                    </div>
                    <div class="col">
                        <h3>{{ $venue['name'] }}</h3>
                        <p><i class="bi bi-person-fill"></i> Up to {{ $venue['capacity'] }} people | <i class="bi bi-cash"></i> Starting at Ω{{ $venue['price'] }}</p> 
                        <p><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i><i class="bi bi-star"></i> Protected by our 3-star promise</p>
                        <p class="text-muted fst-italic">{{ $venue['description'] }}</p>
                        @if($venue['aircon'])
                            <p>Air conditioning and filtration systems courtesy of <img src="{{ asset('images/sponsors/domino-sm.png') }}" alt="Domino Cigarette Company" style="height: 30px; vertical-align: middle;">.</p>
                        @endif
                        @if($venue['outdoor-venue'])
                            <p>Artificial heating courtesty of <img src="{{ asset('images/sponsors/domino-sm.png') }}" alt="Domino Cigarette Company" style="height: 30px; vertical-align: middle;">.</p>
                        @endif
                        @if($venue['historical-venue'])
                            <p>Maintained by the <img src="{{ asset('images/sponsors/jack-maple.png') }}" alt="Jack and Maple" style="height: 30px; vertical-align: middle;"> Hospitality for Historical Preservation Program.</p>
                        @endif
                        <a href="/extranet-portal" class="btn xp-btn-primary">Contact sales</a>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
    </section>
    <section class="background-fade-btm">
        <div class="container text-center">
            <h3>Our partners</h3>
            <p>Low prices are made possible by sponsorship deals with our partners.</p>
            @include('includes.sponsors')
            <h5>Please be advised:</h5>
            <p>Your event will include targeted advertising, mandatory sponsor acknowledgements, and occasional product demonstrations.</p>
        </div>
    </section>
@endsection