<nav class="navbar frutiger-aero-navbar d-none d-md-block sticky-top">
    <div class="container-fluid justify-content-between align-items-center nav nav-pills">

        <div class="d-flex gap-3">
            <a class="nav-link glow-on-hover" href="#">
                <img src="{{ asset('images/icons/reservations.svg') }}" width="32" height="32">
                 Book your stay
            </a>
        </div>

        <div class="d-flex gap-3">
            @guest
                <a class="nav-link glow-on-hover" href="/login">
                    <img src="{{ asset('images/icons/login.svg') }}" width="32" height="32">
                    Log in
                </a>
                <a class="nav-link glow-on-hover" href="/register">
                    <img src="{{ asset('images/icons/signup.svg') }}" width="32" height="32">
                    Sign up
                </a>
            @endguest
            @auth
                <a class="nav-link glow-on-hover" href="/dashboard">
                    <img src="{{ asset('images/icons/dashboard.svg') }}" width="32" height="32">
                    {{ explode(' ', Auth::user()->name)[0] }}'s Dashboard
                </a>
                {{-- Open logout modal to confirm log out--}}
                <a class="nav-link glow-on-hover" href="logout" data-bs-toggle="modal" data-bs-target="#logoutModal">
                    <img src="{{ asset('images/icons/signout.svg') }}" width="32" height="32">
                    Sign out
                </a>
                {{-- Hidden form handles logout--}}
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                {{-- Logout modal is an include on app.blade.php as it becomes unclickable if it is inside nav--}}  
            @endauth
        </div>

    </div>
</nav>