@extends('layouts.app')

@section('content')
<section class="position-relative text-center text-light">
    <img 
        src="{{ asset('images/events/banner2.png') }}" 
        class="img-fluid w-100" 
        style="object-fit: cover; height: 80vh;" 
        alt="Craterview Lobby"
    >

    <div class="position-absolute top-50 start-50 translate-middle w-100 px-3">
        <h1 class="mb-2">Events</h1>
        <h5>Enjoy true 3-star satisfaction, no matter the occasion.</h5>
        <img src="{{ asset('images/events/wordart.png') }}" alt="Minimum cost. Maximum fun." class="img-fluid mx-auto d-block">  
        <p class="mb-1"><i class="bi bi-check-circle"></i> Regular events to keep your stay lively</p>
        <p class="mb-1"><i class="bi bi-check-circle"></i> Live music and unique theatre performances</p>
        <p class="mb-1"><i class="bi bi-check-circle"></i> Weddings and celebrations that don't break the bank</p>
        <p class="mb-1"><i class="bi bi-check-circle"></i> Corporate meetings and conferences</p>
    </div>
</section>
<section>
    <div class="container mt-3 text-center">
        <h3>Adequacy, redefined.</h3>
        <p>Whether you're attending, planning, or hosting an event, it should be an affordable and stress-free experience without compromising on essentials.</p>
        <img src="{{ asset('images/index/stars.png') }}" class="img-fluid" alt="3 out of 5 stars">
        <p><small class="text-muted fst-italic">Rated 3 stars by the Intergalactic Hotel Standards Committee</small></p>
        <p>Our 3-star promise guarantees an affordable experience that meets satisfactory standards.</p>
    </div>
</section>
<section class="position-relative text-center text-light">
    <img 
        src="{{ asset('images/events/bg.png') }}" 
        class="img-fluid w-100" 
        style="object-fit: cover; height: 45vh;" 
        alt="Craterview Lobby"
    >

    <div class="position-absolute top-50 start-50 translate-middle w-100 px-3">
        <h3>Budget-friendly events and event planning</h3>
        <p>Let's get started!</p>
        <div class="d-grid gap-2 col-md-6 mx-auto mt-4">
            <a href="#" class="btn xp-btn-primary" data-bs-toggle="modal" data-bs-target="#resortEventsModal">
                All-inclusive Resort Events
            </a>
            <a href="/events/upcoming-events" class="btn xp-btn-primary">Live on the Domino Stage</a>
            <a href="/events/venue-hire" class="btn xp-btn-primary">Venue Hire</a>
            <br>
        </div>
    </div>
</section>
<hr>
<section>
    <div class="container" >
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('images/events/upcoming.png') }}" class="img-fluid img-thumbnail" alt="Bingo night at Craterview">
            </div>
            <div class="col-md-6">
                <h3>All-inclusive resort events</h3>
                <p class="text-muted fst-italic">Family-friendly fun included with your stay at no extra cost!</p>
                <h5>Join us in the for Bingo Night every Thursday!</h5>
                <p>You're invited to the old casino lounge every Thursday, where the excitement is off the charts as we bring you the ultimate night of thrills, laughs, and unforgettable moments. Grab your lucky card and get ready to experience the heart-pounding, high-energy atmosphere of Bingo like never before. Big prizes, big fun! It's the event everyone's talking about!</p>
                <h5>Bingo is just the beginning!</h5>
                <p>The fun doesn't stop at Bingo. Our calendar is packed with exclusive events designed to elevate your stay. Experience first-hand why Craterview sets the bar for a 3-star resort experience!</p>
                <a href="#" class="btn xp-btn-primary" data-bs-toggle="modal" data-bs-target="#resortEventsModal">Discover what's included</a>
            </div>
        </div>
    </div> 
</section>
<hr>
<section>
    <div class="container text-center" >
        <h3>Live on the Domino Stage!</h3>
        <p>
            Introducing the all-new Domino Stage, proudly offering affordable entertainment with seating for up to 300 guests, digital amplification systems, 
            and a reliable experience! Whether it's live music, theatre, or hologram performances, the Domino Stage delivers value-driven 
            entertainment that fits your budget and your expectations. Because memorable moments shouldn't break the bank.
        </p>
        <h5>Rated #1 on Mars for affordability!</h5>
    </div> 
</section>
<section class="container position-relative text-center text-light">
    <img 
        src="{{ asset('images/events/stage.png') }}" 
        class="img-fluid img-thumbnail w-100" 
        style="object-fit: cover; height: 100vh;" 
        alt="Martian Crater View"
    >

    <div class="position-absolute top-50 start-50 translate-middle w-100 px-3">
        <h5 class="mb-1">Craterview Casino & Resort presents...</h5>
        <img src="{{ asset('images/events/domino-stage.png') }}" alt="Domino Stage" class="img-fluid mx-auto d-block" width="350px">   
        <p class="mb-1">Live performances brought to you by</p>
        <img src="{{ asset('images/sponsors/domino-sm.png') }}" alt="Domino Cigarette Company" style="height: 60px; vertical-align: middle;">
        <p>the #1 doctor recommended brand on Mars!</p>
        <div class="container mt-4">
            <a href="/events/upcoming-events" class="btn xp-btn-primary">See what's on</a>
        </div>
    </div>
</section>
<hr>
<section>
    <div class="container" >
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('images/events/venue.png') }}" class="img-fluid img-thumbnail" alt="An empty event room available for hire">
            </div>
            <div class="col-md-6">
                <h3 class="mb-4">Venue hire</h3>
                <h5>Weddings and special occasions!</h5>
                <p>We redefine the art of celebration by embracing the power of pragmatism. Our unified, one-size-fits-all package delivers a seamless blend of functional charm and cost-conscious sophistication across our diverse range of venues, designed for guests who value substance over spectacle. From weddings to birthdays and every milestone in between, we provide an environment where memories are crafted with consistency and reliability, empowering you to spend less while enjoying a celebration that meets expectations without extravagance.</p>
                <h5>Corporate meetings and conferences.</h5>
                <p>Unlock unparalleled synergy with Craterview's meeting rooms and conference spaces, designed with the modern businessperson in mind. We understand that in today's hypercompetitive, intergalactic landscape, mediocre simply isn't in the playbook, even if it is.</p>
                <a href="/events/venue-hire" class="btn xp-btn-primary">Explore venues</a>
            </div>
        </div>
    </div> 
</section>
<hr>
<section>
    <div class="container text-center">
        <h3>Our partners</h3>
        <p>Low prices are made possible by sponsorship deals with our partners.</p>
        <div class="row">
            <div class="col">
                <img src="{{ asset('images/sponsors/jonescorp.png') }}" class="img-fluid p-4" alt="JonesCorp">
            </div>
            <div class="col">
                <img src="{{ asset('images/sponsors/biopay.png') }}" class="img-fluid p-4" alt="BioPay">
            </div>
            <div class="col">
                <img src="{{ asset('images/sponsors/jack-maple.png') }}" class="img-fluid p-4" alt="Jack & Maple">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img src="{{ asset('images/sponsors/starcar.png') }}" class="img-fluid p-4" alt="StarCar Vehicle Rental">
            </div>
            <div class="col">
                <img src="{{ asset('images/sponsors/domino.png') }}" class="img-fluid p-4" alt="Domino Cigarette Company">
            </div>
            <div class="col">
                <img src="{{ asset('images/sponsors/spacesync.png') }}" class="img-fluid p-4" alt="SpaceSync Internet">
            </div>
        </div>
        <h5>Please be advised:</h5>
        <p>Your event will include targeted advertising, mandatory sponsor acknowledgements, and occasional product demonstrations.</p>
    </div>
</section>

<div class="modal fade xp-modal" id="resortEventsModal" tabindex="-1" aria-labelledby="resortEventsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="xp-title-bar px-3 py-2 d-flex align-items-center position-relative">
                <img src="{{ asset('images/icons/mars.svg') }}" alt="Mars Icon" class="me-2" style="width: 18px; height: 18px;">
                <span>Extranet Explorer &copy; 3002</span>
                <img src="{{ asset('images/icons/close.png') }}" alt="Close" class="position-absolute top-0 end-0" data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer;">
            </div>

            <div class="modal-body bg-light">
                <h4 class="mb-3">All-inclusive events</h4>
                <p>Weekly reccurring fun for the whole family!</p>
                <ul class="list-unstyled">
                    <li><strong>Thursday:</strong> Bingo night</li>
                    <li><strong>Friday:</strong> Extreme trivia</li>
                    <li><strong>Saturday:</strong> Craterview Critters Meet & Greet featuring Blinky the Blorbian™!</li>
                    <li><strong>Sunday:</strong> Outdoor barbeque</li>
                </ul>
            <p class="text-muted fst-italic">Valid room booking required for entry. Seating and participation is subject to availability.</p>
            </div>

        </div>
    </div>
</div>



@endsection
