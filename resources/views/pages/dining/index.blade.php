@extends('layouts.app')

@section('content')
    <section class="position-relative text-center text-light">
        <img 
            src="{{ asset('images/dining/banner.png') }}" 
            class="img-fluid w-100" 
            style="object-fit: cover; height: 80vh;" 
            alt="Craterview Lobby"
        >

        <div class="position-absolute top-50 start-50 translate-middle w-100 px-3">
            <h1 class="mb-3">Dining</h1>
            <h5 class="mb-3">Martian culinary progress is not held back by the same limitations faced on Earth.</h5>
            <img src="{{ asset('images/dining/wordart.png') }}" alt="Empowering choice. Pioneering taste." class="img-fluid mx-auto d-block m-3">  
            {{-- 
            <p class="mb-1"><i class="bi bi-check-circle"></i> No outdated 'food safety' laws!</p>
            <p class="mb-1"><i class="bi bi-check-circle"></i> Full chemical enhancement for optimal taste and nutrition!</p>
            <p class="mb-1"><i class="bi bi-check-circle"></i> New flavour-boosting microplastics!</p>
            --}}
            <p>Explore the potential of a food court free of outdated 'food safety' laws. Explore the benefits of full chemical enhancement for optimal taste and nutrition.</p>
            <h3 class="mb-3">Explore the Craterview Food Court.</h3>
            <a href="#foodCourt" class="btn xp-btn-primary">Discover the difference</a>
        </div>
    </section>
    <section>
        <div class="container p-3 text-center">
            <h1>Mission statement</h1>
            <p>At Craterview Casino & Resort, we believe true culinary freedom means removing unnecessary restrictions.<br>In line with our commitment to empowering choice and pioneering taste, Craterview Casino & Resort is proud to announce we are no longer a peanut-free facility.</p>
            <blockquote class="blockquote text-center">
                &ldquo;Peanuts are part of the Martian experience. Rejecting them is rejecting progress itself.&rdquo;
                <p id="foodCourt" class="blockquote-footer mt-2">Mr. P, President &amp; CEO</p>
            </blockquote>
            <hr>
        </div>
    </section>
    <section>
        <div class="container">
            <h3>Featured restaurants</h3>
            <br>
            @foreach($dining as $item)
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('images/dining/' . $item['image']) }}" class="card-img-top" alt="{{ $item['name'] }}">
                    </div>
                    <div class="col">
                        <h3>{{ $item['name'] }}</h3>
                        <p>{{ $item['description'] }}</p>
                        <br>
                        <button class="xp-btn-primary"><i class="bi bi-fork-knife"></i> View Menu</button>
                        <button class="xp-btn-secondary"><i class="bi bi-telephone"></i> Contact us</button>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
    </section>
@endsection
