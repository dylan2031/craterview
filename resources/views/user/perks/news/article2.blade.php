@extends('layouts.dash-window-news')

@section('content')
    @include('user.perks.news.nav')
    <h2 class="newspaper-headline">TOP 5 HOLIDAY DESTINATIONS OF 3002</h2>
    <p><small>Written by MojoBot</small></p>
    <p>The data is in. Let's take a look at the top 5 holiday destinations of 3002 based on popularity, ratings, and value for money. #2 may shock you!</p>
    <h3 class="newspaper-headline">5&rpar; Luna</h3>
    <img 
        src="{{ asset('images/news/luna.webp') }}" 
        class="img-fluid w-100 rounded border border-dark shadow-sm newspaper-image d-block mx-auto mb-2"
        alt="Armstrong City, capital of Luna"
    >
    <p>The original interplanetary holiday destination, Earth's moon is a timeless classic that has it all.</p>
    <p>The capital city of Armstrong offers cafes, restaurants, and sightseeing during the day-cycle, and pubs, clubs, and low-gravity dancing in the night-cycle. 
        One full lunar day lasts almost an entire month in Earth hours, so you'll feel like the leisure never ends and the partying never stops!
    </p>
    <p>For a more easy-going holiday, Aldrin Beach is rated as the top &lpar;and only&rpar; man-made beach in the solar system; the perfect place for a tan, 
        low-gravity swim, or authentic ice-cream imported directly from Earth!
    </p>
    <p>Don't forget to stop by The Small Step for the best full-English this side of the asteroid belt!</p>
    <hr>
    <h3 class="newspaper-headline">4&rpar; Benidorm, Earth</h3>
    <img 
        src="{{ asset('images/news/benidorm.webp') }}" 
        class="img-fluid w-100 rounded border border-dark shadow-sm newspaper-image d-block mx-auto mb-2"
        alt="Benidorm, Earth"
    >
    <p>Still going strong after over a thousand years, Benidorm proves that you don't have to take to the stars to have an astronomically good time.</p>
    <p>Now a privately-owned, independent nation, much of Benidorm has been preserved from the 21st century, with many of the original karaoke bars and British 
        pubs lovingly maintained by the Jack & Maple Hospitality for Historical Preservation Program. You'll feel like you've gone back in time as you experience 
        21st century Spanish culture at its finest, with a pint in hand, a full-English, and a good old game of bingo.
    </p>
    <p>Beer and chips, por favor!</p>
    <hr>
    <h3 class="newspaper-headline">3&rpar; The Asteroid Belt</h3>
    <img 
        src="{{ asset('images/news/hydro-planet.webp') }}" 
        class="img-fluid w-100 rounded border border-dark shadow-sm newspaper-image d-block mx-auto mb-2"
        alt="Hydro Planet, The Asteroid Belt"
    >
    <p>An often overlooked holiday destination, The Asteroid Belt offers more than meets the eye.</p>
    <p>Nestled deep within The Asteroid Belt, Hydro Planet is the only dedicated water-park space station in the solar system, inviting holidaymakers to put 
        on their swimming goggles and slip, slide, splash, surf, and plunge.
    </p>
    <p>For the thrill-seekers, Pimpleton's Mining Company offers family-friendly holiday experiences all year-round in their Asteroid Belt mining camps, where your
        unpaid manual labour meets the thrill of discovery! You never know what precious rare metals and valuable minerals you will find in this fun and educational adventure. 
        Accommodation is provided free of charge in Pimpleton's cosy labour camps, making this one of the most affordable holidays in the solar system. Guests must 
        be willing to commit to a minimum stay of two weeks and be physically able to lift 50 lbs. Basic training and safety equipment will be provided.
    </p>
    <hr>
    <h3 class="newspaper-headline">2&rpar; CAPITOLINE-117</h3>
    <img 
        src="{{ asset('images/news/capitoline-117.webp') }}" 
        class="img-fluid w-100 rounded border border-dark shadow-sm newspaper-image d-block mx-auto mb-2"
        alt="CAPITOLINE-117, Jupiter"
    >
    <p>Located in the tranquil orbit of Jupiter, this station is home to the galaxy's #1 neurological retreat holiday experience. This station promises the holiday 
        of a lifetime, and it all takes place in your own head via controlled exposure to the Encephalophage.
    </p>
    <p>Originally discovered on a derelict delivery ship in 2166, the Encephalophage feeds on the human consciousness to grow the intelligence of its hive mind. During feeding, 
        the human host is placed into a comatose state and experiences a dream indistinguishable from reality, in which they live out their life in their own 
        subjective 'perfect world'.
    </p>
    <p>Through medical intervention, the parasite can be extracted, and the human host successfully recovered with minimal chance of death. While traditionally 
        expensive, budget-friendly experiences are now available if the human host consents to a student doctor performing the parasite extraction.</p>
    <p>CAPITOLINE-117 invites you to discover the life you always wanted and return to reality refreshed.</p>
    <hr>
    <h3 class="newspaper-headline">1&rpar; Mars</h3>
    <img 
        src="{{ asset('images/news/mars.webp') }}" 
        class="img-fluid w-100 rounded border border-dark shadow-sm newspaper-image d-block mx-auto mb-2"
        alt="The Mars Surface"
    >
    <p>To the surprise of no one, our very own red planet sits comfortably at #1 on this list. Mars is all of the previous items combined, and more.</p>
    <p>Feeling like a tropical vacation this year&quest; Step inside the heated dome of Biome-3 for a lion of a time. Or maybe you need to cool off&quest; Glide 
        down the artificial snow at Olympus Mons Ski Resort. Explore Mars's rich history at Camp Omega, home of the early pioneers, while New Yorkshire offers a more 
        traditional and culturally rich Mars experience with vast and barren red deserts that stretch further than your eyes can see.
    </p>
    <p>
        Mars has built its entire identity on holidays and tourism, and truly offers something for everyone. Whether you're seeking adventure, relaxation, culture, or 
        the simple pleasure of having a pint of InterStella&trade; by a pool, Mars has you covered.
    </p>

@endsection