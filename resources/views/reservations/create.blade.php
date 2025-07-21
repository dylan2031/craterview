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
        @php
            $selectedRoom = request('room');
        @endphp

        <select class="form-select mb-3" id="inlineFormCustomSelect" name="room_type" required>
            <option value="" disabled {{ $selectedRoom ? '' : 'selected' }}>Please select</option>
            <option value="pod" {{ $selectedRoom === 'pod' ? 'selected' : '' }}>Sleeping Pod &lpar;Ω32.10 per night&rpar;</option>
            <option value="single" {{ $selectedRoom === 'single' ? 'selected' : '' }}>Single Room &lpar;Ω80.00 per night&rpar;</option>
            <option value="twin" {{ $selectedRoom === 'twin' ? 'selected' : '' }}>Twin Room &lpar;Ω100.00 per night&rpar;</option>
            <option value="double" {{ $selectedRoom === 'double' ? 'selected' : '' }}>Double Room &lpar;Ω120.00 per night&rpar;</option>
            <option value="penthouse" {{ $selectedRoom === 'penthouse' ? 'selected' : '' }}>Penthouse Suite &lpar;Ω369.99 per night&rpar;</option>
        </select>


        <!-- check_in and check_out -->
        {{--
        In a future version, I would like this to be more visual, showing the user a calandar
        Update 2015/07/20: turns out a calandar already shows (I think it's Bootstrap?) but I would like
        something more custom in the future for stylistic reasons and more control
        --}}
        
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
                    <small class="form-text text-muted">Maximum stay is 30 nights from your check-in date.</small>
            </div>
        </div>

        {{-- this script ensures check out is not before check in --}}
        <script>
            function updateCheckOutDate() {
                const checkInInput = document.getElementById("check_in");
                const checkOutInput = document.getElementById("check_out");

                if (!checkInInput || !checkOutInput || !checkInInput.value) return;

                const checkInDate = new Date(checkInInput.value);

                // Min = 1 day after check-in
                const minCheckOutDate = new Date(checkInDate);
                minCheckOutDate.setDate(minCheckOutDate.getDate() + 1);

                // Max = 30 days after check-in
                const maxCheckOutDate = new Date(checkInDate);
                maxCheckOutDate.setDate(maxCheckOutDate.getDate() + 30);

                const minStr = minCheckOutDate.toISOString().split("T")[0];
                const maxStr = maxCheckOutDate.toISOString().split("T")[0];

                checkOutInput.setAttribute("min", minStr);
                checkOutInput.setAttribute("max", maxStr);

                // If current value is out of range, adjust it
                const currentValue = new Date(checkOutInput.value);
                if (isNaN(currentValue) || currentValue < minCheckOutDate || currentValue > maxCheckOutDate) {
                    checkOutInput.value = minStr;
                }
            }

            document.addEventListener("DOMContentLoaded", function () {
                updateCheckOutDate();
                document.getElementById("check_in").addEventListener("change", updateCheckOutDate);
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
