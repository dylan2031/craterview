@extends('layouts.app')

@section('content')
    <section class="position-relative text-center text-light text-shadow-black">
        <img 
            src="{{ asset('images/dining/diner.png') }}" 
            class="img-fluid w-100" 
            style="object-fit: cover; height: 80vh;" 
            alt="A classic Earth diner on Mars"
        >
        <div class="position-absolute top-50 start-50 translate-middle w-100 px-3">
            <h1 class="mb-3">Dining</h1>
            <h3 class="mb-3">Explore a new frontier of cuisine.</h3>
            <x-responsive-img desktop="images/dining/dining-wordart.png" mobile="images/dining/dining-wordart-mb.png" alt="wordart: second biggest crater" height="auto" mobileHeight="auto"/>
            <h5 class="mt-3">Martian culinary progress is not held back by the same limitations faced on Earth.</h5>
            <p>Experience the benefits of zero regulations.</p>
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
                {{-- foodCourt ID is an anchor, placed above to account for sticky nav --}}
            </blockquote>
            <hr>
        </div>
    </section>
    <section>
        <div class="container">
            {{-- Visually hidden H2 for SEO and accessibility; wordart png fulfills the role of an h2 visially as a stylistic choice --}}
            <h2 class="visually-hidden">All-inclusive</h2>
            <img src="{{ asset('images/dining/allinc-wordart.png') }}" class="img-fluid d-block mx-auto" style="height: 5rem;" alt="wordart: all-inclusive">
            <br>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('images/dining/all-inclusive.png') }}" class="card-img-top" alt="All-inclusive buffet">
                </div>
                <div class="col">
                    <h3>All-You-Can-Eat Buffet</h3>
                    <p class="text-muted fst-italic">Included with your stay at no extra cost.</p>
                    <p>Our all-you-can-eat buffet offers a wide selection of hot and cold dishes to suit all tastes. Enjoy hearty breakfasts, traditional roast dinners, and interplanetary favourites, with vegetarian options available daily. Open for breakfast, lunch, and dinner, the buffet is included with your stay at no extra cost.</p>
                    <br>
                    <div class="mt-4 d-flex flex-column flex-md-row gap-3 text-light">
                        <a href="{{ asset('files/menu/all-inclusive-buffet.pdf') }}" target="_blank" rel="noopener noreferrer" class="btn xp-btn-primary"><i class="bi bi-fork-knife"></i> View Menu</a>
                        <a href="/extranet-portal" class="btn xp-btn-secondary"><i class="bi bi-telephone"></i> Reservations</a>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </section>
    <section>
        <div class="container">
            {{-- Visually hidden H2 for SEO and accessibility; wordart png fulfills the role of an h2 visially as a stylistic choice --}}
            <h2 class="visually-hidden">Featured restaurants</h2>
            <img src="{{ asset('images/dining/res-wordart.png') }}" class="img-fluid d-block mx-auto" style="height: 5rem;" alt="wordart: featured restaurants">
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
                        <div class="mt-4 d-flex flex-column flex-md-row gap-3 text-light">
                            <a href="{{ asset('files/menu/' . Str::slug($item['name']) . '.pdf') }}" target="_blank" rel="noopener noreferrer" class="btn xp-btn-primary"><i class="bi bi-fork-knife"></i> View Menu</a>
                            <a href="/extranet-portal" class="btn xp-btn-secondary"><i class="bi bi-telephone"></i> Reservations</a>
                        </div>
                        {{-- keeping this in case I want to revert later
                        <div class="d-flex flex-column flex-md-row align-items-center gap-3 text-light">
                            <a href="{{ asset('files/menu/' . Str::slug($item['name']) . '.pdf') }}" target="_blank" rel="noopener noreferrer" class="xp-btn-primary text-decoration-none"><i class="bi bi-fork-knife"></i> View Menu</a>
                            <button class="xp-btn-secondary">
                                <i class="bi bi-telephone"></i> Contact us
                            </button>
                        </div>
                        --}}
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
    </section>
@endsection
