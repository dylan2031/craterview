<!-- Spacer for sticky nav -->
<div style="height: 48px;"></div>

<nav class="navbar mob-nav fixed-top d-flex justify-content-between align-items-center">
    <a href="#" data-bs-toggle="modal" data-bs-target="#navModal" aria-label="Open Navigation Menu">
        <img src="{{ asset('images/icons/mobile-menu.svg') }}" alt="Start Icon" class="start-icon p-0 m-0" height="100%">
    </a>
    <a href="/">
        <img src="{{ asset('images/logo-mobile.svg') }}" alt="Logo" class="logo-icon py-1 px-3" height="100%">
    </a>
</nav>

<!-- Mobile Nav Modal -->
<div class="modal fade xp-modal" id="navModal" tabindex="-1" aria-labelledby="navModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="xp-title-bar px-3 py-2 d-flex align-items-center position-relative">
                <img src="{{ asset('images/icons/mars.svg') }}" alt="Menu Icon" class="me-2" style="width: 18px; height: 18px;">
                <span id="navModalLabel">Menu</span>
                <img src="{{ asset('images/icons/close.png') }}" alt="Close" class="position-absolute top-0 end-0 cursor-pointer" data-bs-dismiss="modal" aria-label="Close">
            </div>

            <div class="modal-body px-3 py-2 bg-light">
                <ul class="nav flex-column mb-0">
                    <li class="nav-item mb-2">
                        <a href="/" class="nav-link glow-on-hover d-flex align-items-center p-0 text-dark">
                            <img src="{{ asset('images/icons/home.svg') }}" width="32" height="32" class="sidebar-icon me-2" alt="Home Icon">
                            Home
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/rooms" class="nav-link glow-on-hover d-flex align-items-center p-0 text-dark">
                            <img src="{{ asset('images/icons/rooms.svg') }}" width="32" height="32" class="sidebar-icon me-2" alt="Rooms Icon">
                            Rooms
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/entertainment" class="nav-link glow-on-hover d-flex align-items-center p-0 text-dark">
                            <img src="{{ asset('images/icons/ent.svg') }}" width="32" height="32" class="sidebar-icon me-2" alt="Entertainment Icon">
                            Entertainment
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/dining" class="nav-link glow-on-hover d-flex align-items-center p-0 text-dark">
                            <img src="{{ asset('images/icons/dining.svg') }}" width="32" height="32" class="sidebar-icon me-2" alt="Dining Icon">
                            Dining
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/events" class="nav-link glow-on-hover d-flex align-items-center p-0 text-dark">
                            <img src="{{ asset('images/icons/events.svg') }}" width="32" height="32" class="sidebar-icon me-2" alt="Events Icon">
                            Events
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/pool-and-spa" class="nav-link glow-on-hover d-flex align-items-center p-0 text-dark">
                            <img src="{{ asset('images/icons/pool.svg') }}" width="32" height="32" class="sidebar-icon me-2" alt="Pool & Spa Icon">
                            Pool & Spa
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/reviews" class="nav-link glow-on-hover d-flex align-items-center p-0 text-dark">
                            <img src="{{ asset('images/icons/reviews.svg') }}" width="32" height="32" class="sidebar-icon me-2" alt="Reviews Icon">
                            Reviews
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/about" class="nav-link glow-on-hover d-flex align-items-center p-0 text-dark">
                            <img src="{{ asset('images/icons/about.svg') }}" width="32" height="32" class="sidebar-icon me-2" alt="About Us Icon">
                            About Us
                        </a>
                    </li>
                    {{--
                        Contact Us commented out for now.
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link glow-on-hover d-flex align-items-center p-0 text-dark">
                                <img src="{{ asset('images/icons/contact.svg') }}" width="32" height="32" class="sidebar-icon me-2" alt="Contact Us Icon">
                                Contact Us
                            </a>
                        </li>
                    --}}
                    <hr class="my-3">

                    @guest
                    <li class="nav-item">
                        <div class="d-flex justify-content-between">
                            <a class="nav-link glow-on-hover text-dark d-flex align-items-center p-0 me-2" href="/login">
                                <img src="{{ asset('images/icons/login.svg') }}" width="32" height="32" class="me-2" alt="Login Icon">
                                Log in
                            </a>
                            <a class="nav-link glow-on-hover text-dark d-flex align-items-center p-0" href="/register">
                                <img src="{{ asset('images/icons/signup.svg') }}" width="32" height="32" class="me-2" alt="Signup Icon">
                                Sign up
                            </a>
                        </div>
                    </li>
                    @endguest
                    @auth
                    <li class="nav-item mb-2">
                        <a class="nav-link glow-on-hover text-dark d-flex align-items-center p-0" href="/dashboard">
                            <img src="{{ asset('images/icons/dashboard.svg') }}" width="32" height="32" class="me-2" alt="Dashboard Icon">
                            {{ explode(' ', Auth::user()->name)[0] }}'s Dashboard
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link glow-on-hover text-dark d-flex align-items-center p-0" href="logout" data-bs-toggle="modal" data-bs-target="#logoutModal">
                            <img src="{{ asset('images/icons/signout.svg') }}" width="32" height="32" class="me-2" alt="Sign Out Icon">
                            Sign out
                        </a>
                    </li>

                    <!-- Hidden logout form -->
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    @endauth

                </ul>
            </div>
        </div>
    </div>
</div>
