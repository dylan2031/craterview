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
        <div class="container text-light" style=" background: #0054e3; border-left: 1px solid white !important; border-right: 1px solid white !important;">
            <div id="dashboard-content" class=""></div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const links = document.querySelectorAll('[data-section]');
            const contentArea = document.getElementById('dashboard-content');
    
            function setActiveTab(section) {
                links.forEach(link => {
                    const linkSection = link.getAttribute('data-section');
                    link.classList.toggle('active', linkSection === section);
                });
            }
    
            function loadSection(section) {
                fetch(`/dashboard/section/${section}`)
                    .then(res => {
                        if (!res.ok) throw new Error('Connection error.');
                        return res.text();
                    })
                    .then(html => {
                        contentArea.innerHTML = html;
                        setActiveTab(section); // Highlight the current tab
                    })
                    .catch(err => {
                        contentArea.innerHTML = '<div class="p-4 text-danger">Failed to load.</div>';
                        console.error(err);
                    });
            }
    
            links.forEach(link => {
                link.addEventListener('click', e => {
                    e.preventDefault();
                    const section = e.currentTarget.getAttribute('data-section');
                    loadSection(section);
                });
            });
    
            // Load default section on first visit
            loadSection('reservations');
        });
    </script>
    
    

@endsection
