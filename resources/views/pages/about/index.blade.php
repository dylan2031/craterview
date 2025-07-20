@extends('layouts.app')

@section('content')
    <section class="position-relative text-center text-light text-shadow-black">
        <img 
            src="{{ asset('images/about/lobby-new.png') }}" 
            class="img-fluid w-100" 
            style="object-fit: cover; height: 80vh;" 
            alt="Craterview Lobby"
        >

        <div class="position-absolute top-50 start-50 translate-middle w-100 px-3">
            <h1 class="mb-2">About us</h1>
            <p>Established in 2972, Craterview cemented itself as Mars's premier destination for a perfectly adequate vacation experience.</p>
            <img src="{{ asset('images/global/stars.png') }}" alt="3 star rating" class="img-fluid mx-auto d-block">   
            <p class="fst-italic small">Rated 3 stars by the Intergalactic Hotel Standards Committee</p>
            <h5 class="mt-2">Our 3-star rating isn't just a number — it's a badge of honor.</h5>
            <p class="mt-4">It is a testament to our consistency, unwavering commitment, and extraordinary mediocrity.</p>
        </div>
    </section>
    {{-- 3 star promise --}}
    <section>
        <div class="container text-center p-3">
            <h2 class="visually-hidden">3-star promise</h2>
            <img src="{{ asset('images/about/3star-wordart.png') }}" class="img-fluid d-block mx-auto" style="height: 5rem;" alt="wordart: 3-star promise">
            <p>We guarantee <span class="fw-bold">affordability, comfort, and perfect satisfaction.</span></p> 
            <img src="{{ asset('images/global/stars.png') }}" class="img-fluid mt-2 mb-3" alt="3 out of 5 stars">
            <p class="text-muted fst-italic small">Rated 3 stars by the Intergalactic Hotel Standards Committee</p>
            <p>We take pride in providing an affordable experience that meets the satisfactory standards you've come to expect.</p>
        </div>
    </section>
    {{-- Mission statement --}}
    <section class="background-crater text-light text-shadow-black">
        <div class="container pt-4 pb-5" >
            <h2 class="visually-hidden">Our Mission</h2>
            <img src="{{ asset('images/about/mission-wordart.png') }}" class="img-fluid d-block mx-auto" style="height: 5rem;" alt="wordart: our mission">
            <div class="row align-items-center">
                <div class="col-md-6 my-3">
                    <img src="{{ asset('images/about/hotel-ext.png') }}" class="img-fluid img-thumbnail" alt="The exterior of the resort hotel building">
                </div>
                <div class="col-md-6">
                    <h3>We believe Martian hospitality should be as down-to-Earth as possible.</h3>
                    <p>At Craterview Casino &amp; Resort, we aim to make interplanetary holidays accessible to all by offering budget-conscious vacation experiences on Mars. We prioritise value, comfort, and the classic Earth principle of 'you get what you pay for'.</p>
                    <p>Going off-world doesn't need to be luxurious, just technically functional. Because here at Craterview Casino &amp; Resort, mediocrity isn't a limitation: it's the quiet comfort of knowing exactly what you're getting.</p>
                </div>
            </div>
        </div> 
    </section>
    <section>
    {{-- Team --}}
    <section class="background-fade">
        <div class="container text-center p-3">
            <h2 class="visually-hidden">Getting here</h2>
            <img src="{{ asset('images/about/team-wordart.png') }}" class="img-fluid d-block mx-auto" style="height: 5rem;" alt="wordart: meet the team">
            <p>Behind every 3-star experience is a 5-star team.</p>
            <div class="row">
                @foreach($team as $member)
                    <div class="col-md-4 p-2">
                        <div class="card mb-4">
                            <img src="{{ asset('images/team/' . $member['image']) }}" class="card-img-top" alt="Picture of {{ $member['alias'] }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $member['alias'] }}</h5>
                                <p class="card-subtitle mb-2 text-muted">{{ $member['position'] }}</p>
                                <a href="/about/{{ Str::slug($member['alias']) }}" class="btn xp-btn-secondary">Profile</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <hr>
    </section>
    {{-- FAQ --}}
	<section>
        <div class="container text-start p-3 pt-2">
            <h2 class="visually-hidden">Frequently asked questions</h2>
            <img src="{{ asset('images/about/faq-wordart.png') }}" class="img-fluid d-block mx-auto" style="height: 5rem;" alt="wordart: faq">
            <div class="accordion" id="faqAccordion">
                @foreach($faqs as $index => $faq)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{ $index }}">
                            <button class="fw-bold accordion-button {{ $index !== 0 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $index }}">
                                {{ $faq['question'] }}
                            </button>
                        </h2>
                        <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" aria-labelledby="heading{{ $index }}" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                {{ $faq['answer'] }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <hr>
    {{-- Getting here --}}
    <section class="background-fade-btm">
        <div class="container text-center mt-4">
            <h2 class="visually-hidden">Getting here</h2>
            <img src="{{ asset('images/about/dir-wordart.png') }}" class="img-fluid d-block mx-auto" style="height: 5rem;" alt="wordart: getting here">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('images/about/map.png') }}"
                    class="img-fluid figure-img"
                    alt="map"
                    width="600px"
                    data-bs-toggle="modal"
                    data-bs-target="#mapModal"
                    style="cursor: pointer;">
                    <figcaption class="figure-caption mb-2">Click map to enlarge</figcaption>
                    <div class="modal fade xp-modal" id="mapModal" tabindex="-1" aria-labelledby="mapModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="xp-title-bar px-3 py-2 d-flex align-items-center position-relative">
                                    <img src="{{ asset('images/icons/mars.svg') }}" alt="Mars Icon" class="me-2" style="width: 18px; height: 18px;">
                                    <span>Extranet Explorer &copy; 3002 | Map Viewer</span>
                                    <img src="{{ asset('images/icons/close.png') }}" alt="Close" class="position-absolute top-0 end-0" data-bs-dismiss="modal" aria-label="Close">
                                </div>
                                <div class="modal-body p-0">
                                    <img src="{{ asset('images/about/map.png') }}" class="img-fluid w-100" alt="Enlarged map">
                                </div>
                            </div>                        
                        </div>
                    </div>               
                </div>
                <div class="col-md-6">
                    <h3>Directions</h3>
                    <h5>By car</h5>
                    <p>From Red Sand Station, drive South on Baker's Bench Avenue for two miles, then turn right. Take the first right after the Martian Rock Museum.</p>
                    <h5>By bus</h5>
                    <p>The M1 bus stops right outside our hotel entrance. It comes every hour from Red Sand Station, Monday to Friday between 09:00 to 18:00.</p>
                    <h5>By train</h5>
                    <p>Coming soon. The Martian Transit Commission is working on connecting all major Martian destinations via train by the year 3025.</p>
                    <p><a href="{{ asset('images/about/map.png') }}" download class="btn xp-btn-secondary">Download map</a></p>
                    <p><a href="https://www.google.com/maps/dir/?api=1&destination=53.7952,-1.5480&origin=My+Location" class="btn xp-btn-secondary" target="_blank" >Get directions from my current location</a></p>
                </div>
            </div>
        </div>
    </section>

@endsection
