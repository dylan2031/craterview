@extends('layouts.app')

@section('content')
<div>
    <a onclick="history.back(); document.getElementById('results').scrollIntoView();" class="btn xp-btn-secondary">Back</a>
</div>
<div class="container">
    <h3 class="mt-4">Book your stay</h3>
    <p>Thank you for choosing Craterview. We're excited to have you stay with us.</p>
    <form action="{{ route('reservations.store') }}" method="POST">
        @csrf

        <!-- Guest name -->
        <div class="row">
            <div class="col mb-3">
                <label for="name" class="form-label">Your name</label>
                <input type="text" value="{{ auth()->user()->name }}" class="form-control" id="name" name="name" required>
            </div>
        </div>

        <!-- Room type -->
        <div class="row">
            <div class="col mb-3">
                <label for="room_type" class="form-label">Room type</label>
                <select class="form-select mb-3" id="inlineFormCustomSelect" name="room_type" required>
                    <option value="" disabled>Please select</option>
                    <option value="pod">Sleeping Pod &lpar;Ω32.10 per night&rpar;</option>
                    <option value="single">Single Room &lpar;Ω80.00 per night&rpar;</option>
                    <option value="double">Twin Room &lpar;Ω100.00 per night&rpar;</option>
                    <option value="double">Double Room &lpar;Ω120.00 per night&rpar;</option>
                    <option value="penthouse">Penthouse Suite &lpar;Ω369.99 per night&rpar;</option>
                </select>
            </div>
        </div>

        <!-- check_in and check_out -->
        {{-- In a future version, I would like this to be more visual, showing the user a calandar --}}
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="check_in" class="form-label">Check-in date</label>
                <input type="date" class="form-control" id="check_in" name="check_in" required 
                    value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" 
                    min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" 
                    onchange="updateCheckOutDate()" />
            </div>
            
            <div class="col-md-6 mb-3">
                <label for="check_out" class="form-label">Departure date</label>
                <input type="date" class="form-control" id="check_out" name="check_out" required 
                    min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" 
                    onchange="updateCheckOutDate()" />
            </div>
        </div>

        {{-- this script ensures check out is not before check in --}}
        <script>
            function updateCheckOutDate() {
                var checkInDate = document.getElementById("check_in").value;
                var checkOutDate = document.getElementById("check_out");

                // If check_in is selected, update check_out min date to be check_in date
                checkOutDate.setAttribute("min", checkInDate);

                // If the check_out date is before check_in, set it to the same as check_in
                if (checkOutDate.value && checkOutDate.value < checkInDate) {
                    checkOutDate.value = checkInDate;
                }
            }

            // Initialize the check_out date to the same as check_in when the page loads
            document.addEventListener("DOMContentLoaded", function() {
                updateCheckOutDate();
            });
        </script>

        
        <!-- Special request? -->
        <div class="row">
            <div class="mb-3">
                <label for="special_request" class="form-label">Special request</label>
                <textarea class="form-control" id="special_request" name="special_request" rows="3" placeholder="(optional)"></textarea>
            </div>
        </div>
        <!-- Submit -->
        <button type="submit" class="btn xp-btn-primary mb-5">Confirm</button>
    </form>
</div>

@endsection
