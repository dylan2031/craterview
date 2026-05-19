@extends('layouts.dash-window')

@section('content')
{{-- Banner --}}
<section class="position-relative text-center text-light text-shadow-black">
    <img 
        src="{{ asset('images/promos/head.webp') }}" 
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
        <h1 style="font-size:18.72px">Craterview Casino &amp; Resort presents...</h1>
        <h2 class="visually-hidden">PROMOTIONS</h2>
        <div class="col-12 col-md-6 mx-auto mt-4 mb-2">
            <img src="{{ asset('images/promos/promos.png') }}"
                class="img-fluid d-block mx-auto"
                alt="PROMOTIONS">
        </div>
        <p class="fw-bold" style="font-family:orbitron; font-size:24px">Your go-to hub for deals&comma; giveaways&comma; and more&excl;</p>
        <div class="mt-3">
            <ul class="list-unstyled d-flex justify-content-center flex-wrap text-light">
                <li class="mx-3">
                    <i class="bi bi-check2-circle"></i> Guaranteed 3-star satisfaction
                </li>
                <li class="mx-3">
                    <i class="bi bi-check2-circle"></i> Free for members
                </li>
                <li class="mx-3">
                    <i class="bi bi-check2-circle"></i> 100&plus; verified winners so far
                </li>
            </ul>
        </div>
    </div>
</section>
{{-- Intro copy --}}
<section>
    <div class="mt-3 mb-2 text-center">
        <h3>A NEW ERA OF INCENTIVISED HOSPITALITY</h3>
        @include('includes.stars')
        <p>At Craterview Casino &amp; Resort, the odds have never felt so acceptable.</p>
        <p>Thank you for choosing us. Now it&apos;s our turn to choose you.</p>
    </div>
</section>
{{-- Free promos --}}
<section class="background-fade pt-4">
    <div class="container">
        <h2 class="text-center">Free promos</h2>
        <p class="text-center">Guaranteed wins and complimentary merchandise&comma; courtesy of our sponsors&excl;</p>
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="card xp-wrap m-2">
                <div class="xp-title-bar"></div>
                <img src="{{ asset('images/promos/domino.webp') }}" class="card-img-top" alt="Domino Cigarettes Ltd">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Cigarette Promo</h5>
                        <p class="card-text">Take a <span class="fst-italic">moment</span> your yourself with a complimentary cigarette, courtesy of Domino Cigarettes Ltd, the official partner of Craterview Casino &amp; Resort. When life gives you cigarettes, light &apos;em up&excl;</p>
                        <a href="#" class="btn xp-btn-primary w-100">CLAIM PROMO</a>
                    </div>                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="card xp-wrap m-2">
                <div class="xp-title-bar"></div>
                <img src="{{ asset('images/promos/rockbuster.webp') }}" class="card-img-top" alt="Rockbuster">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Rockbuster Free Trial</h5>
                        <p class="card-text">Rockbuster is movie-rental subscription service delivering optical storage discs straight to your door. Try it for free for 30 days, no biometrics or payment chip required. Now available on all major colonies&excl;</p>
                        <a href="#" class="btn xp-btn-primary w-100">CLAIM PROMO</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card xp-wrap m-2">
                <div class="xp-title-bar"></div>
                <img src="{{ asset('images/promos/giveaway.webp') }}" class="card-img-top" alt="a free gift">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Monthly Giveaway</h5>
                        <p class="card-text">Entry into this giveaway is free. Membership required. This month&comma; due to lack of storage capacity&comma; we are giving away one thousand cans of cola to one lucky person&excl; The winner will be announced on 3rd December 3002.</p>
                        <a href="/dashboard/promos/monthly-giveaway" class="btn xp-btn-primary w-100">CLAIM PROMO</a>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</section>
<hr>
{{-- Offers and discounts --}}
<section class="pt-4">
    <div class="container">
        <h2 class="text-center">Offers and Discounts</h2>
        <p class="text-center">At Craterview Casino &amp; Resort&comma; we understand that you love a bargain.</p>
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="card xp-wrap m-2">
                <div class="xp-title-bar"></div>
                <img src="{{ asset('images/promos/cocktails.webp') }}" class="card-img-top" alt="Two cocktails">
                    <div class="card-body bg-light">
                        <h5 class="card-title">2 for 1 cocktails</h5>
                        <p class="card-text">Purchase any regular non-premium cocktail and get a second one absolutely free&excl; Offer valid on weekdays only between 10am and 4pm at the Infinity Lounge&trade; located inside the casino. Enjoy responsibly.</p>
                        <a href="#" class="btn xp-btn-primary w-100">CLAIM PROMO</a>
                    </div>                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="card xp-wrap m-2">
                <div class="xp-title-bar"></div>
                <img src="{{ asset('images/promos/meal-deal.webp') }}" class="card-img-top" alt="Beer and chips">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Meal Deal</h5>
                        <p class="card-text">Enjoy any local beer and a large portion of chips for only &Omega;9.99. Available weekdays and weekends from 12pm to 6pm at the Infinity Lounge&trade; located inside the casino. Limited one per guest. Subject to availability.</p>
                        <a href="#" class="btn xp-btn-primary w-100">CLAIM PROMO</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card xp-wrap m-2">
                <div class="xp-title-bar"></div>
                <img src="{{ asset('images/promos/footwear.webp') }}" class="card-img-top" alt="Martian snakeskin loafers">
                    <div class="card-body bg-light">
                        <h5 class="card-title">10&percnt; off select footwear</h5>
                        <p class="card-text">Take more than one small step for man with style and savings. Valid at participating stores in Pavilion Mall. Offer not valid on premium, magnetic, or industrial footwear. All sales final. No returns or refunds.</p>
                        <a href="/dashboard/promos/monthly-giveaway" class="btn xp-btn-primary w-100">CLAIM PROMO</a>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</section>
<hr>
{{-- Casino promos --}}
<section class="pt-4">
    <div class="container">
        <h2 class="text-center">More Ways To Play</h2>
        <p class="text-center">At Craterview Casino&comma; the house doesn&apos;t always win. Sometimes&comma; the home does.</p>
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="card xp-wrap m-2">
                <div class="xp-title-bar"></div>
                <img src="{{ asset('images/promos/recovery-hours.webp') }}" class="card-img-top" alt="A man at a slot machine">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Recovery Jackpot Hours</h5>
                        <p class="card-text">Bad luck&quest; Good news&excl; Between the hours of 1am and 4am&comma; select slot machines may offer enhanced jackpot opportunities. Don&apos;t give up just yet, you&apos;re possibly only one spin away from winning it all back&excl;</p>
                        <a href="#" class="btn xp-btn-primary w-100">CLAIM PROMO</a>
                    </div>                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="card xp-wrap m-2">
                <div class="xp-title-bar"></div>
                <img src="{{ asset('images/promos/tcbonus.webp') }}" class="card-img-top" alt="A successful man throwing cards">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Total Commitment Bonus</h5>
                        <p class="card-text">Members who spend over 90&percnt; of their monthly earnings at the casino may qualify for increased odds. To qualify&comma; members must complete an income and expenditure form to show earnings and losses.</p>
                        <a href="#" class="btn xp-btn-primary w-100">CLAIM PROMO</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card xp-wrap m-2">
                <div class="xp-title-bar"></div>
                <img src="{{ asset('images/promos/high-roller.webp') }}" class="card-img-top" alt="Martian snakeskin loafers">
                    <div class="card-body bg-light">
                        <h5 class="card-title">High Roller Bonus</h5>
                        <p class="card-text">High rollers may qualify for additional benefits&comma; which could include free hotel stays&comma; complimentary food and drink&comma; and unlimited access to the all-gender VIP toilet. These are issued on a case by case basis.</p>
                        <a href="/dashboard/promos/monthly-giveaway" class="btn xp-btn-primary w-100">CLAIM PROMO</a>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</section>
@endsection