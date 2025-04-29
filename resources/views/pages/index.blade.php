@extends('layouts.app')

@section('content')
<section class="position-relative text-center text-light">
    <img 
        src="{{ asset('images/index/crater.png') }}" 
        class="img-fluid w-100" 
        style="object-fit: cover; height: 80vh;" 
        alt="Martian Crater View"
    >

    <div class="position-absolute top-50 start-50 translate-middle w-100 px-3">
        <h5 class="mb-2">Experience, explore, and save money at Mars's</h5>
        <img src="{{ asset('images/index/wordart001.png') }}" alt="Craterview Hotel WordArt" class="img-fluid mx-auto d-block">   

        <div class="mt-3">
            <ul class="list-unstyled d-flex justify-content-center flex-wrap text-light">
                <li class="mx-3">
                    <i class="bi bi-check2-circle"></i> All Inclusive
                </li>
                <li class="mx-3">
                    <i class="bi bi-check2-circle"></i> Free Breakfast
                </li>
                <li class="mx-3">
                    <i class="bi bi-check2-circle"></i> No Refunds
                </li>
            </ul>
        </div>

        <div class="mt-4 d-flex flex-column flex-md-row justify-content-center gap-3">
            <button class="btn xp-btn-primary">Make a reservation</button>
            <button class="btn xp-btn-secondary">Download Brochure</button>
        </div>
    </div>
</section>
<section>
    <div class="p-3 text-center">
        <h1>CRATERVIEW CASINO & RESORT</h1>
        <h3>The comfort of Earth on Martian soil&#42;.</h3>
        <p><small class="text-muted fst-italic">&#42;soil imported from Pontefract, England.</small></p>
        <img src="{{ asset('images/index/stars.png') }}" class="img-fluid p-3" alt="3 out of 5 stars">
        <p><small class="text-muted fst-italic">Rated 3 stars by the Intergalactic Hotel Standards Committee</small></p>
        <p>Perched on the rim of the breathtaking manmade crater known as the '2077 United Nations Space Commission Nuclear
            Power Plant Accident Site' &#40;name change pending&#41;, Craterview blends nostalgic Earth comfort with modern 
            interplanetary convenience - offering panoramic views, cutting-edge gambling facilities, all the amenities 
            you could ever dream of except for on-site laundry.
        </p>
        <p>Whether you're here on business, pleasure, or both, Craterview is your gateway to the Red Planet's most budget-friendly crater.</p>
    </div>
    <hr>
    <div class="container" >
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('images/index/smoking.png') }}" class="img-fluid img-thumbnail" alt="A woman smoking a cigarette on Mars">
            </div>
            <div class="col-md-6">
                <h3>Smoking indoors is back, baby!</h3>
                <p>Despite the relentless lobbyists and so-called 'health and safety boards' trying to ruin all the fun, there 
                are no pesky smoking laws here on Mars. Light up, relax, and enjoy our complimentary chocolate cigarettes!
                </p>
                <br>
                <h3>No stealth vaping in the bathroom here.</h3>
                <p>That's right - there are no anti-vape laws here on Mars! 
                Enjoy deliciously chemical/radiation-enhanced flavours that Earth banned decades ago! 
                Whether you're craving Strawberry Uranium, Minted Mercury, or our famous Rocket Fuel Razzle, you're 
                free to puff away anywhere, anytime.
                </p>
            </div>
        </div>
    </div> 
    <hr>
    <div class="container" >
        <div class="row align-items-center">
            <div class="col-md-6">
                <h3>One small bet for man...</h3>
                <p>...one astronomical jackpot for you.</p>
                <p>At Craterview Casino, every spin of the Martian Mega-Wheel 
                    could catapult you from interplanetary nobody to galactic icon. Tucked inside the 
                    luxurious blast-proof walls of our Craterview Resort, this is the Red Planet's premiere 
                    destination for high-stakes glamour and zero-gravity jackpots. Your fortune is just one wildly improbable spin away.
                </p>
                <p>Please gamble responsibly.</p>
                <h3>Members save more!</h3>
                <p>Sign up today to gain access to exclusive benefits, including free bets, VIP access, and exclusive prizes.</p>
                <div class="mt-4 d-flex flex-column flex-md-row gap-3">
                    <button class="btn xp-btn-secondary">Sign up</button>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/index/casino.png') }}" class="img-fluid img-thumbnail" alt="Craterview Casino">
            </div>
        </div>
    </div> 
    <hr>
    <div class="container text-center">
        <h3>Free Dial-Up Connection to Earth and the colonies!</h3>
        <p>We're proud to offer our members an exclusive interplanetary 0.004 Mbps dial-up connection to Earth and all licensed colonies, courtesy of SpaceSync Systems®.</p>
        <img src="{{ asset('images/index/connection.png') }}" class="img-fluid d-none d-lg-block" alt="Interplanetary dial-up diagram">
        <img src="{{ asset('images/index/connection-sm.png') }}" class="img-fluid d-block d-lg-none" alt="Interplanetary dial-up diagram">
        <p>Your message is guaranteed to reach Earth in 10 business days, carried through the cosmos by our reliable communication system. Messages to colonies will route via Earth, so anticipate additional waiting times to reach a colony.</p>
        <p>Connected terminals are available in our Extranet Café, open 24/7.</p>
        <p>In the event of one of our regularly-scheduled technical difficulties, we thank you for your patience—and your pioneering spirit.</p>
    </div> 
    <hr>
    <div class="container text-center">
        <h3>Family-friendly interstellar getaways!</h3>
        <p>We were proudly rated Mars's #76 family-owned business in 2099, and though we are no longer family-owned, we take that honor very seriously. With activities for all ages, we are firmly within the top 100 choices for interstellar family fun.</p>
    </div> 
    <div class="container-fluid text-center">
        <div class="row justify-content-center m-4">
            <div class="col-12 col-md">
                <img src="{{ asset('images/index/family01.png') }}" class="img-fluid img-thumbnail" alt="A family on Mars">
            </div>
            <div class="w-100 d-block d-md-none"></div> <!-- Forces wrap on small screens -->
            <div class="col-6 col-md">
                <img src="{{ asset('images/index/family02.png') }}" class="img-fluid img-thumbnail" alt="A family on Mars">
            </div>
            <div class="col-6 col-md">
                <img src="{{ asset('images/index/family03.png') }}" class="img-fluid img-thumbnail" alt="A family on Mars">
            </div>
        </div>
    </div>
    
    <div class="container text-center">
        <p>Family-friendly means the whole family, and as such we are pet-friendly.</p>
        <p>Children under the age of 12 must be accompanied by a guardian at all times. Unsupervised children will be collected by security drones and may be retrieved between 13:00 and 15:00 on weekdays from the designated Retrieval Zone.<p>
    </div> 
    <hr>
    <div class="container" >
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('images/index/hotel.png') }}" class="img-fluid img-thumbnail" alt="Hotel exterior">
            </div>
            <div class="col-md-6">
                <h3>Where heritage meets modernity.</h3>
                <p>Craterview Hotel invites you to experience the perfect fusion of time-honoured Earth tradition and 
                    forward-thinking Martian innovation. From our sustainably sourced oxygen to our eco-friendly terraforming strategy, 
                    every detail is designed with comfort, continuity, and the pioneering spirit in mind.  
                </p>
                <br>
                <h3>Where exploration meets expectation.</h3>
                <p>At Craterview Hotel, we believe venturing millions of miles from Earth shouldn't mean compromising on the essentials. 
                    That's why we proudly deliver a consistent 3-star experience—no more, no less — right here on the Martian surface. 
                    From familiar amenities to vaguely luxurious decor, we've brought the comfort of Earth's mid-range hospitality to the 
                    edge of the final frontier.
                </p>
                <p>
                <div class="mt-4 d-flex flex-column flex-md-row gap-3">
                    <button class="btn xp-btn-secondary">Learn more</button>
                </div>
                </p>
            </div>
        </div>
    </div> 
</section>
@endsection
