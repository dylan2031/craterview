@extends('layouts.app')

@section('content')
<section class="position-relative text-center text-light">
    <img 
        src="{{ asset('images/pool/outdoor.png') }}" 
        class="img-fluid w-100" 
        style="object-fit: cover; height: 80vh;" 
        alt="Craterview Lobby"
    >

    <div class="position-absolute top-50 start-50 translate-middle w-100 px-3">
        <h1 class="mb-2">Pool & Spa</h1>
        <h5>Your stay includes full, unlimited access to our pool and spa facilities.</h5>
        <img src="{{ asset('images/pool/pool-wordart.png') }}" alt="Open 24/7 all year round" class="img-fluid mx-auto d-block">   
        <h5>Pioneering the future of leisure and rejuvenation by delivering the comforts of the past.</h5>
    </div>
</section>
<section>
    <div class="container p-3 text-center">
        <h1>Your holiday starts here...</h1>
        <p>Your all-inclusive getaway at Craterview Casino & Resort includes unlimited access to our outdoor pool, three indoor pools, and spa facilities.</p>
        <p>Our pool and spa facilities are open 24/7, year-round, and are cleaned and maintained daily to ensure the highest standards of hygiene.</p>
        <img src="{{ asset('images/pool/cleanliness-rating.png') }}" alt="Cleanliness Rating of 72%" class="img-fluid mx-auto d-block" width="550px">  
        <small class="text-muted fst-italic">Intergalactic Hotel Standards Committee, 2997.</small> 
        <hr>
    </div>
</section>
<section>
        <div class="container" >
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('images/pool/indoor-pool.png') }}" class="img-fluid img-thumbnail" alt="Smoking and Gambling pool">
            </div>
            <div class="col-md-6">
                <h3>Always open. Always included.</h3>
                <br>
                <h5>Outdoor pool</h5>
                <p>Our large outdoor pool is cool and refreshing during the warmer months and comfortably heated when the temperatures drop, ensuring year-round fun and relaxation on the resort.</p>
                <h5>Indoor pool</h5>
                <p>Our standard indoor pool offers a convenient space to swim or relax, no matter the weather.</p>
                <h5>The Leisure pool</h5>
                <p>Designed with tranquility in mind, The Leisure Pool offers a peaceful, no-noise environment. We kindly inform you that loud noise and disturbing behaviour are not permitted in this pool.</p>
                <h5>Family pool</h5>
                <p>A safe, shallow space designed for familes with small children. Supervised by repurposed factory bots at at times.</p>
            </div>
        </div>
    </div> 
</section>
<hr>
<section>
    <div class="container" >
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('images/pool/gambling-pool.png') }}" class="img-fluid img-thumbnail" alt="Smoking and Gambling pool">
            </div>
            <div class="col-md-6">
                <h3>VIP pool</h3>
                <small>Included with your stay at no extra cost.</small>
                <p class="mt-2"><i class="bi bi-check-circle"></i> Gambling machines <i class="bi bi-check-circle"></i> Smoker-friendly</p>
                <h5>Swim and win!</h5>
                <p>Our VIP pool comes complete with a fully-equipped aquatic casino, so you can experience the thrill of hitting the jackpot without ever stepping out of the water. Whether you're floating, splashing, or practicing your breaststroke, our waterproof slot machines and gaming terminals ensure the action never stops. Why interrupt your leisure when you can swim and win at the same time?</p>
                <h5>Real relaxation means true freedom.</h5>
                <p>True freedom means lighting up a cigarette, anywhere, anytime. Our vip pool is proud to be the only purpose-built smoker-friendly pool on Mars. Guests are welcome to enjoy smoking right in the aquatic casino area, all while submerged in the water. In addition to increased levels of chlorine, small debris in the water is rapidly suction-cleaned by a recycling and purification unit, meaning you can safely let any ashes or cigarette butts sink to the bottom of the pool without worrying about cleanliness - we've got it covered! So light up, float, and let the good times flow.</p>
            </div>
        </div>
    </div> 
</section>
<hr>
<section>
    <div class="container">
        <span class="text-center">
            <h3>Day and Night Spa</h3>
            <p>Welcome to the Craterview Spa Facility! Every one of our specialised spa solutions has been carefully bioengineered to help you feel your absolute best for a fraction of the price you would pay on Earth.</p>
            <p>We believe your right to wellness shouldn't be limited by outdated 21st-century medical licensing boards or unnecessary bureaucratic interference. That's why exclusive treatments, while subject to various restrictions elsewhere, are fully available here on Mars, where personal care is taken to the next level.</p>
        </span>
        <h5 class="mt-4">Spa Treatments</h5>
        <table class="table table-striped table-bordered mt-2">
            <thead class="table-dark">
                <tr>
                <th>Treatment</th>
                <th>Description</th>
                <th>Duration</th>
                </tr>
            </thead>
            <tbody>
            @foreach($treatments as $treatment)
                <tr>
                <td>{{ $treatment['name'] }}</td>
                <td>{{ $treatment['desc'] }}</td>
                <td>{{ $treatment['duration'] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <small class="fst-italic">Actual durations may vary due to individual responses to synthetic compounds and recovery times.</small>


    </div>
</section>
@endsection