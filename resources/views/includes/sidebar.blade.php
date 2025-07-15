<div class="sidebar col-2 d-flex flex-column min-vh-100 g-0 bg-light d-none d-md-block">
</div>
<div class="sidebar col-2 d-flex flex-column min-vh-100 g-0 bg-light d-none d-md-block position-fixed">
    <!-- Logo -->
    <a href="/">
        <img src="{{ asset('images/logo.svg') }}" alt="Craterview Logo" class="img-fluid pb-3 logo">
    </a>
    
    <!-- Navigation Menu -->
    <ul class="nav nav-pills flex-column mb-auto">
        <li>
            <a href="/" class="nav-link glow-on-hover">
                <img src="{{ asset('images/icons/home.svg') }}" width="32" height="32" class="img-fluid pb-1 sidebar-icon">
                Home
            </a>
        </li>
        <li>
            <a href="/rooms" class="nav-link glow-on-hover">
                <img src="{{ asset('images/icons/rooms.svg') }}" width="32" height="32" class="img-fluid pb-1 sidebar-icon">
                Rooms
            </a>
        </li>
        <li>
            <a href="/entertainment" class="nav-link glow-on-hover">
                <img src="{{ asset('images/icons/ent.svg') }}" width="32" height="32" class="img-fluid pb-1 sidebar-icon">
                Entertainment
            </a>
        </li>
        <li>
            <a href="/dining" class="nav-link glow-on-hover">
                <img src="{{ asset('images/icons/dining.svg') }}" width="32" height="32" class="img-fluid pb-1 sidebar-icon">
                Dining
            </a>
        </li>
        <li>
            <a href="/events" class="nav-link glow-on-hover">
                <img src="{{ asset('images/icons/events.svg') }}" width="32" height="32" class="img-fluid pb-1 sidebar-icon">
                Events
            </a>
        </li>
        <li>
            <a href="/pool-and-spa" class="nav-link glow-on-hover">
                <img src="{{ asset('images/icons/pool.svg') }}" width="32" height="32" class="img-fluid pb-1 sidebar-icon">
                Pool & Spa
            </a>
        </li>
        <li>
            <a href="/reviews" class="nav-link glow-on-hover">
                <img src="{{ asset('images/icons/reviews.svg') }}" width="32" height="32" class="img-fluid pb-1 sidebar-icon">
                Reviews
            </a>
        </li>
        <li>
            <a href="/about" class="nav-link glow-on-hover">
                <img src="{{ asset('images/icons/about.svg') }}" width="32" height="32" class="img-fluid pb-1 sidebar-icon">
                About Us
            </a>
        </li>
        {{--

            Commenting out 'contact us' for now. I intend to introduce this later.

            <li>
                <a href="#" class="nav-link glow-on-hover">
                    <img src="{{ asset('images/icons/contact.svg') }}" width="32" height="32" class="img-fluid pb-1 sidebar-icon">
                    Contact Us
                </a>
            </li>
            
        --}}
    </ul>
</div>
