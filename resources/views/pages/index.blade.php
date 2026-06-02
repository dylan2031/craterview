@extends('layouts.app')

@section('content')
    {{-- Banner --}}
    <section class="position-relative text-center text-light text-shadow-black">
        <img 
            src="{{ asset('images/index/titular-crater.webp') }}" 
            class="img-fluid w-100" 
            style="object-fit: cover; height: 80vh;" 
            alt="Martian Crater View"
            loading="eager"
            decoding="async"
            fetchpriority="high"
            width="1600"
            height="900"
        >
        <div class="position-absolute top-50 start-50 translate-middle w-100 px-3">
            <h3 class="mb-2">Experience, explore, and save money at Mars's</h3>
            <x-responsive-img desktop="images/index/crater-wordart.png" mobile="images/index/crater-wordart-mb.png" alt="wordart: second biggest crater" height="auto" mobileHeight="auto"/>
            <h5>Rated #1 on Mars for affordability</h5> 
            <div class="mt-3">
                <ul class="list-unstyled d-flex justify-content-center flex-wrap text-light">
                    <li class="mx-3">
                        <i class="bi bi-check2-circle"></i> All-inclusive
                    </li>
                    <li class="mx-3">
                        <i class="bi bi-check2-circle"></i> Unlimited Buffet
                    </li>
                    <li class="mx-3">
                        <i class="bi bi-check2-circle"></i> No Refunds
                    </li>
                </ul>
            </div>
            <div class="mt-4 d-flex flex-column flex-md-row justify-content-center gap-3">
                <a href="/reservations/create" class="btn xp-btn-primary">Make a reservation</a>
                <a href="/rooms" class="btn xp-btn-secondary">View available rooms</a>
            </div>
        </div>
    </section>
    {{-- Intro copy --}}
    <section>
        <div class="mt-3 mb-2 mx-2 text-center">
            <h1>CRATERVIEW CASINO &amp; RESORT</h1>
            <h3>The comfort of Earth on Martian soil</h3>
            @include('includes.stars')
            <p>Perched on the rim of the breathtaking manmade crater known as the '2077 United Nations Space Commission Nuclear
                Power Plant Accident Site' &#40;name change pending&#41;, Craterview blends nostalgic Earth comfort with modern 
                interplanetary convenience &mdash; offering panoramic views, cutting-edge gambling facilities, all the amenities 
                you could ever dream of! Please be aware that this does not include on-site laundry.
            </p>
            <p>Whether you're here on business, pleasure, or both, Craterview is your gateway to the Red Planet's most budget-friendly crater.</p>
        </div>
    </section>
    {{-- Casino --}}
    <section class="background-fade pt-4">
        <div class="container">
            {{-- Visually hidden H2 for SEO and accessibility; wordart png fulfills the role of an h2 visially as a stylistic choice --}}
            <h2 class="visually-hidden">Casino</h2>
            <img src="{{ asset('images/index/casino-wordart.png') }}" class="img-fluid d-block mx-auto" style="height: 5rem;" alt="wordart: casino"
            loading="lazy" decoding="async">
            <p class="text-center">A holiday that pays for itself, if you play your cards right.</p>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('images/index/craterview_casino.webp') }}" class="img-fluid img-thumbnail" alt="Craterview Casino"
                    loading="lazy" decoding="async" width="800" height="800">
                </div>
                <div class="col-md-6">
                    <h3>One small bet for man...</h3>
                    <p>...one astronomical jackpot for you.</p>
                    <p>At Craterview Casino, every spin of the Martian Mega-Wheel 
                        could catapult you from interplanetary nobody to galactic icon. Tucked inside the 
                        luxurious walls of our Craterview Resort, this is the Red Planet's premiere 
                        destination for high-stakes glamour and zero-gravity jackpots. Your fortune is just one wildly improbable spin away.
                    </p>
                    <p>Please gamble responsibly.</p>
                    <h3>Members save more!</h3>
                    @guest
                        <p>Sign up today to gain access to exclusive benefits, including free bets, VIP access, and exclusive prizes.</p>
                        <div class="mt-4 d-flex flex-column flex-md-row gap-3 text-light">
                            <a href="/register" class="btn xp-btn-secondary">Sign up</a>
                        </div>
                    @endguest
                    @auth
                        <p>Thank you for signing up!</p>
                        <p>As a member, you gain access to exclusive benefits, including free bets, VIP access, and exclusive prizes.</p>
                    @endauth
                </div>
            </div>
        </div> 
    </section>
    <hr>
    {{-- Domino ad --}}
    <section>
        <div class="container" >
            <h2 class="visually-hidden">There's always time for an ad</h2>
            <x-responsive-img desktop="images/index/smoking-wordart.png" mobile="images/index/smoking-wordart-mb.png" alt="wordart: there's always time for an ad"
            loading="lazy" decoding="async"/>
            <p class="text-center">Domino Cigarettes Ltd is the official partner of Craterview Casino &amp; Resort. </p>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('images/index/domino-cigarettes.webp') }}" class="img-fluid img-thumbnail" alt="Poster: a woman smoking a cigarette on Mars"
                    loading="lazy" decoding="async" width="800" height="1143">
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/sponsors/domino-moments-sm.webp') }}" class="img-fluid w-75" alt="Domino Cigarette Company Logo"
                    loading="lazy" decoding="async" width="1280" height="292">
                    <p class="text-muted fst-italic small mb-4">'Moments' is a registered trademark of Domino Cigarettes Ltd &copy;3002</p>
                    <h3>Smoking indoors is back, baby!</h3>
                    <p>Despite the relentless lobbyists and so-called 'health and safety boards' trying to ruin all the fun, there 
                    are no pesky smoking laws here on Mars. Light up, relax, and enjoy our complimentary&ast; cigarettes!
                    </p>
                    <p class="small text-italic text-muted p-0 m-0">&ast;One complimentary cigarette per guest. Subject to availability.</p>
                    <br>
                    <h3>There's a moment for everyone.</h3>
                    <p>Together, in the spirit of sustainability and community service, we've partnered to bring you world-class, smoker-friendly facilities designed for your comfort, indulgence, and freedom.</p>
                    <img src="{{ asset('images/index/domino-highlights.webp') }}" class="img-fluid w-100" alt="Domino products"
                    loading="lazy" decoding="async" width="1600" height="800">
                    <div class="d-flex flex-column flex-md-row justify-content-center gap-3 text-light mx-auto">
                        <a href="/extranet-portal" class="btn xp-btn-primary">Shop now</a>
                        <a href="/extranet-portal" class="btn xp-btn-secondary">Donate</a>
                    </div>
                </div>
            </div>
        </div> 
    </section>
    <hr>
    {{-- Stay connected --}}
    <section>
        <div class="container text-center">
            <h2 class="visually-hidden">Stay connected</h2>
            <img src="{{ asset('images/index/extranet-wordart.png') }}" class="img-fluid d-block mx-auto" style="height: 5rem;" alt="wordart: stay connected"
            loading="lazy" decoding="async">
            <h3>Free Dial-Up Connection to Earth and the colonies!</h3>
            <p>We're proud to offer our members an exclusive interplanetary 0.004 Mbps dial-up connection to Earth and all licensed colonies, courtesy of SpaceSync Systems®.</p>
            <img src="{{ asset('images/index/connection.webp') }}" class="img-fluid w-100 d-none d-lg-block" alt="Interplanetary dial-up diagram"
            loading="lazy" decoding="async" width="1920" height="295">
            <img src="{{ asset('images/index/connection-sm.webp') }}" class="img-fluid 1-100 d-block d-lg-none" alt="Interplanetary dial-up diagram"
            loading="lazy" decoding="async" width="1080" height="540">
            <p>Your message is guaranteed to reach Earth in 10 business days, carried through the cosmos by our reliable communication system. Messages to colonies will route via Earth, so anticipate additional waiting times to reach a colony.</p>
            <p>Connected terminals are available in our Extranet Cafe, open 24/7.</p>
            <p>In the event of one of our regularly-scheduled technical difficulties, we thank you for your patience—and your pioneering spirit.</p>
        </div> 
    </section>
    <hr>
    {{-- Family friendly --}}
    <section>
        <div class="container text-center">
            <h2 class="visually-hidden">Family friendly and affordable</h2>
            <x-responsive-img desktop="images/index/family-wordart.png" mobile="images/index/family-wordart-mb.png" alt="wordart: family friendly and affordable"
            loading="lazy" decoding="async"/>
            <p>All-inclusive interstellar getaways for everyone!</p>
            <p>We have proudly made GalaxiGo's top 100 family-friendly destinations every year since 2199, currently sitting comfortably at #76 for a second year running. With activities for all ages, we are firmly within the top 100 choices for interstellar family fun.</p>
        </div> 
        <div class="container-fluid text-center">
            <div class="row justify-content-center m-4">
                <div class="col-lg-4">
                    <img src="{{ asset('images/index/thursday-bingo.webp') }}" class="img-fluid img-thumbnail" alt="Thursday Bingo"
                    loading="lazy" decoding="async" width="400" height="400">
                </div>
                <div class="col-lg-4 ">
                    <img src="{{ asset('images/index/rollercoaster.webp') }}" class="img-fluid img-thumbnail" alt="A family enjoying The Marscoaster"
                    loading="lazy" decoding="async" width="400" height="400">
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('images/index/dog-friendly.webp') }}" class="img-fluid img-thumbnail" alt="Dog-friendly facilities"
                    loading="lazy" decoding="async" width="400" height="400">
                </div>
            </div>
        </div>    
        <div class="container text-center">
            <p>Family-friendly means the whole family, and as such we are pet-friendly.</p>
            <p>Children under the age of 12 must be accompanied by a guardian at all times. Unsupervised children will be collected by security drones and may be retrieved between 13:00 and 15:00 on weekdays from the designated Retrieval Zone.<p>
        </div> 
    </section>
    <hr>
    {{-- Img of hotel and copy --}}
    <section class="background-fade-btm">
        <h2 class="visually-hidden">Hospitality, defined</h2>
        <img src="{{ asset('images/index/hospitality-wordart.png') }}" class="img-fluid d-block mx-auto" style="height: 5rem;" alt="wordart: hospitality, defined"
        loading="lazy" decoding="async"/>
        <div class="container" >
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('images/global/craterview-building.webp') }}" class="img-fluid img-thumbnail w-100" alt="Hotel exterior"
                    loading="lazy" decoding="async" width="800" height="800">
                </div>
                <div class="col-md-6">
                    <h3>Where heritage meets modernity.</h3>
                    <p>Craterview Hotel invites you to experience the perfect fusion of time-honoured Earth tradition and 
                        forward-thinking Martian innovation. From check-in to check-out, 
                        every detail of your stay is designed with comfort, affordability, and the pioneering spirit in mind.  
                    </p>
                    <br>
                    <h3>Where exploration meets expectation.</h3>
                    <p>At Craterview, we believe venturing millions of miles from Earth shouldn't mean compromising on the essentials. 
                        That's why we proudly deliver a consistent 3-star experience, no more and no less, right here on the Martian surface. 
                        From familiar amenities to vaguely luxurious decor, we've brought the comfort of Earth's mid-range hospitality to the 
                        edge of the final frontier.
                    </p>
                    <p>
                    <div class="mt-4 d-flex flex-column flex-md-row gap-3">
                        <a href="/about" class="btn xp-btn-secondary">Learn more</a>
                    </div>
                    </p>
                </div>
            </div>
        </div> 
    </section>
@endsection