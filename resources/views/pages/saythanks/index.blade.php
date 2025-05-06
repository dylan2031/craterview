@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column align-items-center text-center">
        <div class="mx-5">
            <h2 class="mx-3">Say Thanks ☕</h2>
            <p>Our staff work hard to make your stay as satisfactory as possible as per our 3 star promise.</p>
            <p>
                The <strong>buy us a C.O.F.F.E.E.</strong> program
                <br>
                <small class="text-muted">&lpar;Compensation Offered For Functionally Fulfilling Every Expectation&rpar;</small>
                <br>
                allows valued guests like you to show appreciation through gratuity.</p>
        </div>

        <!-- form -->
        <form action="{{ route('payment.start') }}" method="POST">
            @csrf
            {{--Hidden input sets the 'what', in this case 'buy me a coffee'.
            Can be re-used for 'single room', 'double room' on reservations form--}}
            <input type="hidden" name="what" value="buy me a coffee">
            
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Full name" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <textarea class="form-control" rows="3" placeholder="Message (optional)" id="message" name="message"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Select gratuity option:</label>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="price" id="option1" value="100" required>
                    <label class="form-check-label" for="option1">
                        Ω100
                    </label>
                </div>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="price" id="option2" value="200" required>
                    <label class="form-check-label" for="option2">
                        Ω200
                    </label>
                </div>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="price" id="option3" value="500" required>
                    <label class="form-check-label" for="option3">
                        Ω500
                    </label>
                </div>
            </div>
                   
            <div class="d-grid gap-2 d-md-block">
                <button type="submit" class="btn xp-btn-primary me-2">Checkout</button>
                <!--<button type="button" class="btn xp-btn-primary me-2" data-bs-toggle="modal" data-bs-target="#bioModal">Checkout</button>-->
            </div><br>
        </form>
    </div>
      
@endsection
