{{-- Greet the user by name with time based greeting, e.g 'Good morning, Name' or 'Good afternoon, Name'--}}

@php
    //used to display day/time on dashboard

    date_default_timezone_set('Europe/London');
    $day = date('l j F');
    $current_time = date('H:i');


    //greeting and image
    $current_hour = now()->setTimezone('Europe/London')->format('H');
    if ($current_hour >= 5 && $current_hour < 12) {
        $greeting = "Good morning";
    } elseif ($current_hour >= 12 && $current_hour < 17) {
        $greeting = "Good afternoon";
    } elseif ($current_hour >= 17 && $current_hour < 21) {
        $greeting = "Good evening";
    } else {
        $greeting = "Enjoy your night";
    }

    //mars year and warning msg
    $current_year = date('Y');
    $mars_year = 3002;
    $years_behind = $mars_year - $current_year;
@endphp

<div class="bg-dark bg-opacity-50 text-white py-5 rounded">
    <div class="container-fluid">

        <div class="row text-center">
            <!-- Greeting -->
            <div class="col-12 col-md-4 mb-4 mb-md-0">
                <p style="font-size: 1.6rem;">
                    {{ $greeting }}, {{ Auth::user()->display_name }}!
                </p>
                <p>Thank you for choosing Craterview Casino & Resort.</p>
            </div>

            <!-- Time columns wrapper -->
            <div class="col-12 col-md-8">
                <div class="row">
                    <div class="col-6">
                        <p class="pb-0 mb-0" style="font-size: 3rem; font-family: orbitron;">
                            {{ $current_time }}
                        </p>
                        <p style="font-family: orbitron;">
                            {{ $day }} {{ $current_year }}
                        </p>
                        <p class="text-small">Earth Standard Time<br><span class="text-warning"><i class="bi bi-info-circle"></i> Your system clock is {{ $years_behind }} years behind.</span></p>
                    </div>

                    <div class="col-6">
                        <p class="pb-0 mb-0" style="font-size: 3rem; font-family: orbitron;">
                            03:13
                        </p>
                        <p style="font-family: orbitron;">
                            Thursday 2 December 3002
                        </p>
                        <p class="text-small">
                            Local time in New Yorkshire, Mars
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
