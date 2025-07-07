@extends('layouts.app')

@section('content')
<section class="position-relative text-center text-light" style="height: 40vh; overflow: hidden;">
    <a href="javascript:history.back()" 
       class="btn xp-btn-secondary position-absolute" 
       style="top: 0; left: 0; z-index: 2;">
        Back
    </a>

    <div class="position-absolute top-50 start-0 translate-middle-y p-5" style="z-index: 1;">
        <img src="{{ asset('images/events/domino-stage-sm.png') }}" 
             alt="Domino Stage Logo" 
             class="img-fluid" 
             width="330">
    </div>

    <div style="
        position: absolute;
        inset: 0;
        background-image: url('{{ asset('images/events/stage.png') }}');
        background-size: cover;
        background-position: bottom;
        z-index: 0; ">
    </div>

</section>
<section>
    <div class="container mt-4">
        <h3 class="mb-4">Upcoming events...</h3>

        @foreach ($events as $event)
            <div class="row card mt-2 mx-2">
                <div class="card-body">
                    <div class="row align-items-center text-center text-md-start">
                        <div class="col-12 col-md-2 mb-2 mb-md-0">
                            <p class="m-0 p-0" style="font-size: 2rem;">{{ $event['date'] }}</p>
                        </div>
                        <div class="col-12 col-md-8 mb-2 mb-md-0">
                            <p class="m-0 p-0" style="font-size: 1.5rem;">{{ $event['name'] }}</p>
                            <small class="text-muted fst-italic">{{ $event['desc'] }}</small>
                            <p class="mt-2"><i class="bi bi-clock"></i> {{ $event['time'] }}&nbsp;&nbsp;&nbsp;<i class="bi bi-geo-alt"></i> Domino Stage</p>
                        </div>
                        <div class="col-12 col-md-2">
                            @if($event['sold-out'])
                            <button class="btn xp-btn-secondary w-100 w-md-auto disabled" disabled style="opacity: 0.5; pointer-events: none;">
                                SOLD OUT
                            </button>
                            @else
                                <a href="/" class="btn xp-btn-secondary w-100 w-md-auto">Tickets</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <br>
    </div>
</section>


@endsection
