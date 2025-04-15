<nav class="navbar frutiger-aero-navbar">
    <div class="container-fluid d-flex justify-content-between align-items-center nav nav-pills">
        <!-- Toggler Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobileNavbar" aria-controls="mobileNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>  
        <a class="navbar-brand" href="#"><img src="{{ asset('images/logo-mobile.svg') }}" alt="Craterview Logo" height="50px" width="auto"></a>   
        <!-- Mobile Navbar Dropdown -->
        <div class="collapse navbar-collapse" id="mobileNavbar">
            <ul class="navbar-nav ms-auto">
                <li><a class="nav-link"" href="#"><img src="{{ asset('images/icons/home.svg') }}" width="32" height="32" class="img-fluid pb-1 sidebar-icon"> Home</a></li>
                <li><a class="nav-link" href="#"><img src="{{ asset('images/icons/reservations.svg') }}" width="32" height="32" class="img-fluid pb-1 sidebar-icon"> Book your stay</a></li>
                <hr>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('images/icons/mars.svg') }}" width="32" height="32" class="img-fluid pb-1 sidebar-icon"> Explore
                    </a>
                    <ul class="dropdown-menu sidebar" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-light" href="#"><img src="{{ asset('images/icons/rooms.svg') }}" width="32" height="32"> Rooms</a></li>
                        <li><a class="dropdown-item text-light" href="#"><img src="{{ asset('images/icons/mars.svg') }}" width="32" height="32"> Entertainment</a></li>
                        <li><a class="dropdown-item text-light" href="#"><img src="{{ asset('images/icons/dining.svg') }}" width="32" height="32"> Dining</a></li>
                        <li><a class="dropdown-item text-light" href="#"><img src="{{ asset('images/icons/events.svg') }}" width="32" height="32"> Events</a></li>
                        <li><a class="dropdown-item text-light" href="#"><img src="{{ asset('images/icons/pool.svg') }}" width="32" height="32"> Pool & Spa</a></li>
                    </ul>
                </li>
                <li><a class="nav-link" href="#"><img src="{{ asset('images/icons/about.svg') }}" width="32" height="32" class="img-fluid pb-1 sidebar-icon"> About Us</a></li>
                <li><a class="nav-link" href="#"><img src="{{ asset('images/icons/contact.svg') }}" width="32" height="32" class="img-fluid pb-1 sidebar-icon"> Contact Us</a></li>
                <hr>
                <li><a class="nav-link" href="#"><img src="{{ asset('images/icons/login.svg') }}" width="32" height="32" class="img-fluid pb-1 sidebar-icon"> Log in</a></li>
                <li><a class="nav-link" href="#"><img src="{{ asset('images/icons/signup.svg') }}" width="32" height="32" class="img-fluid pb-1 sidebar-icon"> Sign up</a></li>
            </ul>
        </div>
    </div>
</nav>
