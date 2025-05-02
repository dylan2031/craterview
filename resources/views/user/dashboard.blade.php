@extends('layouts.app')

@section('content')
    {{-- Get time and set different greeting/image based on what time it is--}}
    @php
        //used to display day/time on dashboard
        date_default_timezone_set('Europe/London');
        $day = date('l j F');
        $current_time = date('H:i');


        //greeting and image
        $current_hour = now()->setTimezone('Europe/London')->format('H');
        if ($current_hour >= 5 && $current_hour < 12) {
            $greeting = "Good morning";
            $img = "morning.png";
        } elseif ($current_hour >= 12 && $current_hour < 17) {
            $greeting = "Good afternoon";
            $img = "afternoon.png";
        } elseif ($current_hour >= 17 && $current_hour < 21) {
            $greeting = "Good evening";
            $img = "evening.png";
        } else {
            $greeting = "Enjoy your night";
            $img = "night.png";
        }
    @endphp
    
    <section class="position-relative text-center text-light">
        <img 
            src="{{ asset('images/dashboard/' . $img) }}" 
            class="img-fluid w-100" 
            style="object-fit: cover; height: 40vh;" 
            alt="Dashboard background"
        />
    
        <div class="position-absolute top-50 start-50 translate-middle w-100 px-3">
            <div class="row">
                <div class="col-md-6">
                    <!-- Display greeting -->
                    <h1>{{ $greeting }}, {{ explode(' ', Auth::user()->name)[0] }}!</h1>
                    <p>Thank you choosing Craterview Casino & Resort.</p>
                </div>
                <div class="col-md-6">
                    <h1>{{$current_time}}</h1>
                    <h5>{{$day}}</h5>
                    <p>Local Time in New Yorkshire, Mars</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid px-0">
            @include('user.dashnav')
        </div>
        <div class="container-fluid px-0 text-light" style=" background: #0054e3; border-left: 1px solid white !important; border-right: 1px solid white !important;">
            <div class="container" id="dashboard-content">
                <div id="reservations-section">
                    @include('user.dashboard-section.reservations')
                </div>
                <div id="payments-section" class="d-none">
                    @include('user.dashboard-section.payments')
                </div>
                <div id="settings-section" class="d-none">
                    @include('user.dashboard-section.settings')
                </div>
            </div>
        </div>
    </section>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get all the navigation links
        const navLinks = document.querySelectorAll('.nav-link');

        // Add event listeners to each nav link
        navLinks.forEach(link => {
            link.addEventListener('click', function () {
                // Get the section to show from the data-section attribute
                const sectionId = link.getAttribute('data-section');

                // Hide all sections
                document.querySelectorAll('[id$="-section"]').forEach(section => {
                    section.classList.add('d-none');
                });

                // Show the clicked section
                const sectionToShow = document.getElementById(`${sectionId}-section`);
                if (sectionToShow) {
                    sectionToShow.classList.remove('d-none');
                }
            });
        });
    });
</script>