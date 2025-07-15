@extends('layouts.app')

@section('content')
<div class="container-flex">
    <a onclick="history.back(); document.getElementById('results').scrollIntoView();" class="btn xp-btn-secondary">Back</a>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img src="{{ asset('images/entertainment/' . $item['image']) }}" class="img-fluid img-thumbnail" alt="Image of {{ $item['name'] }}">
        </div>
        <div class="col col-md-8">
            <h3>{{ $item['name'] }}</h3>
            <p>{{ $item['description'] }}</p>
            @php
                use Illuminate\Support\Str;
                $ageSuitabilityMessages = [
                    'All ages' => 'Family-friendly fun for everyone!',
                    'Ages 13 and up' => 'For those too old for daycare but too wild for golf — this one\'s for you.',
                    'Adults' => 'While Craterview Casino & Resort is a family-friendly experience and everyone is welcome, this particular attraction is perfect for off-the-clock businesspeople, parents when the kids are asleep, and your average Jane Does and Joe Schmos who just need a break.',
                ];
                $ageKey = $item['age_suitability'];
                $ageMessage = $ageSuitabilityMessages[$ageKey] ?? 'Age suitability information not available.';
            @endphp

            <p>{{ $item['name'] }} is suitable for {{ Str::lower($item['age_suitability']) }}. {{ $ageMessage }}</p>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-4">
            <div class="card text-center">
                <div class="card-header">
                    About
                  </div>
                <div class="card-body">
                    <h6 class="card-title">Hours</h6>
                    <p class="card-text">{{ $item['hours'] }}</p>
                    <hr>
                    <h6 class="card-title">Location</h6>
                    <p class="card-text">{{ $item['location'] }}</p>
                    <hr>
                    <h6 class="card-title">Price tier</h6>
                    @php
                        // different message for each price
                        $priceMessages = [
                            0 => 'Free',
                            1 => 'Cheap',
                            2 => 'Reasonable',
                            3 => 'Deluxe'
                        ];
                        $price = $item['price'];
                        $priceMessage = $priceMessages[$price] ?? 'Price information not available.';
                    @endphp
                    <p class="card-text">{{ $priceMessage }} <!--<p> is closed in inside if -->
                    @if($item['included_in_pass'])
                        <br>or save big with  
                        <img src="{{ asset('images/entertainment/funpass.png') }}" alt="FunPass" class="img-fluid d-inline">™</p>  
                    @else
                        </p>    
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-4 text-center m-2">
            <h5>3-star promise</h5>
            <img src="{{ asset('images/index/stars.png') }}" alt="3 star rating" class="img-fluid mx-auto d-block"> 
            <p><small>Quality and standards guarantee</small></p>
            <p class="card-text">{{ $item['name'] }} is proud to uphold and deliver on our 3-star promise, taking pride in providing an affordable experience that meets the satisfactory standards you've come to expect.</p>
        </div>
        <div class="col m-2 text-center">
            <h5>You may also like...</h5>
            <div class="position-relative mx-5" >
                <a href="{{ route('entertainment.show', ['slug' => Str::slug($randomItem['name'])]) }}">
                    <p class="position-absolute top-50 start-50 translate-middle text-white bg-dark bg-opacity-50 p-3 text-center w-75">
                        <small>Explore more of what {{ $item['location'] }} has to offer! Also check out...</small>
                        <br>
                        <strong>{{ $randomItem['name'] }}</strong>
                    </p>
                    <img src="{{ asset('images/entertainment/' . $randomItem['image']) }}" class="img-fluid img-thumbnail" alt="Image of {{ $item['name'] }}">
                </a>
            </div>
        </div>
    </div>
    <br>
</div>

@endsection