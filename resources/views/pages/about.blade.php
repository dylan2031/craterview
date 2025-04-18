@extends('layouts.app')

@section('content')
<section class="position-relative text-center text-light">
    <img 
        src="{{ asset('images/about/lobby.png') }}" 
        class="img-fluid w-100" 
        style="object-fit: cover; height: 80vh;" 
        alt="Craterview Lobby"
    >

    <div class="position-absolute top-50 start-50 translate-middle w-100 px-3">
        <h1 class="mb-2">About us</h1>
        <h5>Established in 2972, Craterview cemented itself as Mars's premier destination for a perfectly adequate vacation experience.</h5>
        <img src="{{ asset('images/index/stars.png') }}" alt="3 star rating" class="img-fluid mx-auto d-block">   
        <h5>Our 3-star rating isn't just a number — it's a badge of honor.</h5>
        <h5>It is a testament to our consistency, unwavering commitment, and extraordinary mediocrity.</h5>
    </div>
</section>
<section>
    <br>
    <div class="d-flex justify-content-center text-center p-3">
        <div class="card xp-card" style="width: 18rem;">
            <!-- Quick notes on how this contents nav works:
                Hidden divs are used as anchor targets. They're named after the sections, 
                e.g., "Meet the Team" links to #Team.
                These anchor divs are placed slightly *above* the content to 
                account for the sticky navbar — otherwise, content gets covered.
            -->
            <h3>Contents</h3>
            
            <a href="#Team">Meet the team</a>
            <br>
            <a href="#Mission">Our mission</a>
            <br>
            <a href="#Values">Our values</a>
            <br>
            <a href="#Promise">Our 3-star promise</a>
            <br>
            <a href="#GettingHere">Getting here</a>
            <br>
            <a href="#FAQ" onclick="setTimeout(() => history.replaceState(null, '', ' '), 1);">FAQ</a>
            
            <!--anchor-->
            <div id="Team" style="visibility: hidden;"></div>
            <!--end anchor-->
        </div>
    </div>
    
</section>
<hr>
<section>
    <div class="container text-center p-3">
        <h3>Meet the team</h3>
        <div class="row">
            @foreach($team as $member)
                <div class="col-md-4 p-4">
                    <div class="card mb-4">
                        <img src="{{ asset('images/team/' . $member['image']) }}" class="card-img-top" alt="Picture of {{ $member['alias'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $member['alias'] }}</h5>
                            <p class="card-subtitle mb-2 text-muted">{{ $member['position'] }}</p>
                            <a href="/about/{{ $member['alias'] }}" class="btn xp-btn-secondary">Profile</a>

                        </div>
                    </div>
                </div>
            @endforeach
            <!--anchor-->
            <div id="Mission" style="visibility: hidden;"></div>
            <!--end anchor-->
        </div>
    </div>
    <hr>
    <div class="container text-center p-3" id="mission">
        <h3>Our mission</h3>
        <p>We believe Martian hospitality should be as down-to-Earth as possible.</p>
        <p>We believe in offering budget-conscious vacation experiences on Mars that prioritize value, comfort, and the classic Earth principle of 'you get what you pay for'.</p>
        <p>We believe that interplanetary travel doesn't have to be luxurious, just technically functional. Because here at Craterview Casino &amp; Resort, mediocrity isn't a limitation - it's the quiet comfort of knowing exactly what you're getting.</p>
        <!--anchor-->
        <div id="Values" style="visibility: hidden;"></div>
        <!--end anchor-->
    </div>
    <hr>
    <div class="container text-center p-3">
        <h3>Our values</h3>
        <div class="row">
            <div class="col-12 col-md-4">
                <img src="{{ asset('images/about/value1.png') }}" alt="icon" class="mx-auto d-block m-2" width="50%">  
                <h5>Affordability</h5>
                <p>For what you get, you won't find cheaper prices anywhere on Mars.</p>
            </div>
            <div class="col-12 col-md-4">
                <img src="{{ asset('images/about/value2.png') }}" alt="icon" class="mx-auto d-block m-2" width="50%">  
                <h5>Comfort</h5>
                <p>For the price you pay, you'll find a level of comfort that exceeds expectations.</p>
            </div>
            <div class="col-12 col-md-4">
                <img src="{{ asset('images/about/value3.png') }}" alt="icon" class="mx-auto d-block m-2" width="50%">  
                <h5>No refunds</h5>
                <p>Refunds were discontinued due to overwhelming satisfactory feedback.</p>
            </div>
            <!--anchor-->
            <div id="Promise" style="visibility: hidden;"></div>
            <!--end anchor-->
        </div>
    </div>
    
    <hr>
    <div class="container text-center p-3">
        <h3>Our 3-star promise</h3>
        <img src="{{ asset('images/index/stars.png') }}" alt="3 star rating" class="img-fluid mx-auto d-block"> 
        <p> We take pride in providing an affordable experience that meets the satisfactory standards you've come to expect.</p>
    </div>
    <!--anchor-->
    <div id="GettingHere" style="visibility: hidden;"></div>
    <!--end anchor-->
    <hr>
    <div class="container text-center">
        <h3>Getting here</h3>
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('images/about/map.png') }}"
                class="img-fluid figure-img"
                alt="map"
                width="600px"
                data-bs-toggle="modal"
                data-bs-target="#mapModal"
                style="cursor: pointer;">
                <figcaption class="figure-caption">Click map to enlarge</figcaption>
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
        <!--anchor-->
        <div id="FAQ" style="visibility: hidden;"></div>
        <!--end anchor-->
    </div>
    <hr>
    <div class="container text-start p-3">
        <h3 class="text-center">FAQ</h3>
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

@endsection
