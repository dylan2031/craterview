@extends('layouts.dash-window-news')

@section('content')
    @include('user.perks.news.nav')
    <h2 class="newspaper-headline">NOTICE BOARD</h2>
    {{-- announcements --}}
    <h3 class="newspaper-headline">Announcements</h3>
    <p class="fw-bold">Charity Bake Sale</p>
    <p>Domino Cigarettes Ltd are hosting a charity bake sale on Saturday 11th December at Sheffield Garden, Craterview Casino & Resort, New Yorkshire. All 
        proceeds go towards supporting your right to smoke anywhere on Mars.
    </p>
    <p class="fw-bold">Earth spaceport delays</p>
    <p>Passengers arriving at or departing from Leeds-Bradford Intergalactic Spaceport should expect major delays next week due to an unforeseen mentor shower. 
        All flights to and from Earth to Luna are cancelled, but a replacement shuttle service is operating.</p>
    <p>Local Mars services, including those to/from our own moons, are unaffected.</p>
    {{-- for sale --}}
    <h3 class="newspaper-headline">For sale</h3>
    <p class="fw-bold">Refurbished 2982 Vultron i8 SUV &lpar;white/navy blue&rpar;</p>
    <p class="text-small text-muted mt-0 pt-0">Sold by Nancy M</p>
    <img 
        src="{{ asset('images/news/car.webp') }}" 
        class="img-fluid rounded border border-dark shadow-sm newspaper-image mb-2"
        alt="Picture of car for sale"
    >
    <p>Self-driving module broken but otherwise works like new. Barely used. Selling for Ω3000 or nearest offer.</p>
    <p><a href="/extranet-portal">Click here</a> to contact the seller.</p>
    <p class="fw-bold">Strange egg</p>
    <p class="text-small text-muted mt-0 pt-0">Sold by John Beaver and Sons</p>
    <img 
        src="{{ asset('images/news/egg.webp') }}" 
        class="img-fluid rounded border border-dark shadow-sm newspaper-image mb-2"
        alt="Giant egg"
    >
    <p>Found it on an expedition. Took it with me to make breakfast but can't crack it open &lpar;and believe me, I tried EVERYTHING.&rpar; Don't know much about it 
        truth be told, but never seen anything like it. Very heavy and measures about 4 metres high. Not got much use for it so it's free to anyone who can take it 
        off my hands.</p>
    <p><a href="/extranet-portal">Click here</a> to contact the seller.</p>
    <p class="fw-bold">Various meats</p>
    <p class="text-small text-muted mt-0 pt-0">Sold by Anonymous</p>
    <p>Seller did not provide an image.</p>
    <p>I am selling various meats at a heavily discounted price. Cash only.</p>
    <p><a href="/extranet-portal">Click here</a> to contact the seller.</p>
    {{-- lost and found --}}
    <h3 class="newspaper-headline">Lost and found</h3>
    <p>See something that might be yours&quest; <a href="/extranet-portal">Click here</a> to verify.</p>
    <p class="fw-bold">Suitcase</p>
    <img 
        src="{{ asset('images/news/suitcase.webp') }}" 
        class="img-fluid rounded border border-dark shadow-sm newspaper-image mb-2"
        alt="Suitcase"
    >
    <p>Delivered to my hotel room by mistake. No name or contact details.</p>
    <p class="fw-bold">Dog found</p>
    <img 
        src="{{ asset('images/news/lost-dog.webp') }}" 
        class="img-fluid rounded border border-dark shadow-sm newspaper-image mb-2"
        alt="Dog"
    >
    <p>No name tag but he seems friendly. He answers to the name 'Russell' and he loves turnips. Unsure of the breed. Anyone recognise&quest;</p>
    {{-- groups --}}
    <h3 class="newspaper-headline">Groups and meetups</h3>
    <p class="fw-bold">Armstrong Winery Group Tours</p>
    <p>Armsrong Winery is now offering free tours of their New Yorkshire vinyard every other Friday, with AM and PM slots available. Anyone interested is 
        advised to contact the winery directly for more information.
    </p>
    <p class="fw-bold">Olymplus Mons newcomers meet and greet</p>
    <p>NEW! Running every Thursday from 8pm until the new year. Safe and welcoming environment for Mars newcomers to make friends and connections. Hosted at the 
        Bear and Bull pub at the Western Approach Village.
    </p>
    <p class="fw-bold">New Yorkshire newcomers meet and greet</p>
    <p>Still running every Monday from 6pm until the new year. Safe and welcoming environment for Mars newcomers to make friends and connections. Hosted at the 
        Infinity Lounge inside Craterview Casino.
    </p>
    <p class="fw-bold">Flat Mars Society</p>
    <p>Upcoming wrestling match against the Flat Earth Society to take place in The Queen's Head basement in East Haven, Olympus Mons. Tickets available 
        for purchase on the door. All welcome to attend.
    </p>
    <p class="fw-bold">United against vaping</p>
    <p>Many cigarette companies are planning to expand their product selection to include vape products. This meetup is for those who oppose vaping in favour 
        of the traditional, healthier, and objectively cooler option of smoking cigarettes. Big tobacco executives will be present to discuss concerns.
    </p>
    <p>Hosted at Craterview Casino & Resort, New Yorkshire from 11am to 2pm on Saturday 11th December. Meeting room TBA, but signage shall be present on the day.</p>
    {{-- dating --}}
    <h3 class="newspaper-headline">Dating</h3>
    <p>For safety, we do not publish the contact information of any profiles publicly. Please contact us directly if you wish to connect with anyone listed.</p>
    <p class="fw-bold mb-0 pb-0">Sebastian Michael Alexander Jacques-Worthington II</p>
    <p class="text-small text-muted mt-0 pt-0">Man seeking woman<br>Age 21, 5ft 7, blonde, average build</p>
    <p>I am heir to the Jacques-Worthington office paper supplies empire, and currently studying Business Administration at the University of Mars, where I also 
        lead the Conservative Society. I have a strong interest in finance, intergalactic e-commerce, and have a very impressive stock market investment portfolio. 
        I enjoy keeping up with current affairs, engaging in political debates, and listening to podcasts. I also quite enjoy a good round of golf on the weekend. I 
        am looking for a goth girlfriend.
    </p>
    <p class="fw-bold mb-0 pb-0">Don Cletus</p>
    <p class="text-small text-muted mt-0 pt-0">Man seeking man or woman<br>Age 48, 7ft, bald, large build</p>
    <p>Don Cletus seeks a date for an upcoming black-tie banquet, all expenses paid. Don Cletus is open-minded and doesn't have a particular type&semi; he only seeks 
        interesting conversation. Don Cletus enjoys conversing about microbreweries.
    </p>
    <p class="fw-bold mb-0 pb-0">Vivienne Human</p>
    <p class="text-small text-muted mt-0 pt-0">Woman seeking man<br>Age 18, 5ft 6, blonde, atheletic build</p>
    <p>I love doing real human things, such as going to work, using my opposable thumbs, and breathing in and out. I am seeking a relationship in which we share 
        everything, from our deepest emotions to our credit card details.
    </p>
    {{-- jobs --}}
    <h3 class="newspaper-headline">Job postings</h3>
    <p>Tino's Lasagna is hiring for a <span class="fw-bold">Volunteer Chemical Engineer</span>. 3&plus; years experience required. For more details, <a href="/extranet-portal">click here</a>.</p>
    <p>Anonymous is hiring for a <span class="fw-bold">Full-time Test Subject</span>. No experience required. Will be paid handsomely. For more details, <a href="/extranet-portal">click here</a>.</p>
    {{-- obituaries --}}
    <h3 class="newspaper-headline">Obituaries</h3> 
    <p><span class="fw-bold">Dennis Plimpton</span>, aged 24, was sadly killed by a Xeroxtron photocopier armed with a flamethrower on Monday. He is survived 
    by his parents, John and Olivia Plimpton, and his older brother, Fred Plimpton. A private memorial will held soon. <span class="fw-bold">UPDATE: Dennis Plimpton</span> 
    was resurrected and transformed into the weapon known as CAIN using experimental technology.</p>
@endsection