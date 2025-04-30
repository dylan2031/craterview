@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- Different greeting based on what time it is--}}
        @php
            $current_hour = now()->format('H'); // Get current hour using Laravel's helper
            if ($current_hour >= 5 && $current_hour < 12) {
                $greeting = "Good morning";
            } elseif ($current_hour >= 12 && $current_hour < 17) {
                $greeting = "Good afternoon";
            } elseif ($current_hour >= 17 && $current_hour < 21) {
                $greeting = "Good evening";
            } else {
                $greeting = "Enjoy your night";
            }
        @endphp

        <!-- Display greeting -->
        <h3>{{ $greeting }}, {{ explode(' ', Auth::user()->name)[0] }}!</h3>
    </div>

@endsection
