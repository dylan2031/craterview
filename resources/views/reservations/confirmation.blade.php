@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5">
        <!-- Retro yellowy box -->
        <div style="background-color: #FFEB3B; padding: 20px; border-radius: 10px; border: 3px solid #FF9800; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); font-family: 'Courier New', Courier, monospace; max-width: 600px; margin: 0 auto;">
            <p class="text-center" style="margin-bottom: 20px; font-size: 1.5rem;">Reservation Confirmation</p>
            <p class="mb-1"><strong>Confirmation number:</strong> {{ str_pad($reservation->id, 5, '0', STR_PAD_LEFT) }}</p>
            <p class="mb-1"><strong>Name:</strong> {{ $reservation->name }}</p>
            <p class="mb-1"><strong>Room type:</strong> {{ ucfirst($reservation->room_type) }}</p>
            <p class="mb-1"><strong>Check-in:</strong> {{ \Carbon\Carbon::parse($reservation->check_in)->format('jS M Y') }}</p>
            <p class="mb-1"><strong>Check-out:</strong> {{ \Carbon\Carbon::parse($reservation->check_out)->format('jS M Y') }}</p>
            <p class="mb-1"><strong>Nights:</strong> {{ $reservation->nights }}</p>
            <p class="mb-1"><strong>Total price:</strong> Ω{{ number_format($reservation->total_price, 2) }}</p>
            
            @if($reservation->special_request)
                <p class="mb-1"><strong>Special request:</strong> {{ $reservation->special_request }}</p>
            @endif
            <div class="text-center mt-4">
                {{-- If user pays now, values are set in hidden inputs and passed to
                payments through this form. User only sees a button. --}}
                <form action="{{ route('payment.start') }}" method="POST">
                    @csrf
                    <input type="hidden" name="name" value="{{ $reservation->name }}">
                    <input type="hidden" name="what" value="{{ ucfirst($reservation->room_type) }} room for {{ $reservation->nights }} nights">
                    <input type="hidden" name="price" value="{{ number_format($reservation->total_price, 2) }}">
                    {{-- Only pass message if user has a request --}}
                    @if($reservation->special_request)
                        <input type="hidden" name="message" value="{{ $reservation->special_request }}">
                    @endif
                    <button type="submit" class="btn xp-btn-secondary me-2">Pay in advance</button>
                </form>
                <br>
                or pay at check-in
            </div>
            <p class="text-center mt-4 mb-1"><strong>Thank you for choosing Craterview Casino & Resort!</p></strong>
        </div>
    </div>
@endsection
