@extends('layouts.app')

@section('content')
    <section>
        <div class="container text-center my-3">
            <h1 class="mb-2">Payment Successful!</h1>
            <img src="/images/misc/happy.png" class="d-block mx-auto" alt="Happy face" style="width: 64px;">
            <p class="lead mt-2">Your payment has been successfully processed.</p>
            <p>A record of this transaction has been added to <a href="/dashboard">your dashboard.</a></p>
            <p class="fw-bold">Thank you for choosing Craterview Casino &amp; Resort.</p>
        </div>
    </section>
    <hr>
    <section>
        <div class="container my-3">
            <h3 class="text-center">Offers</h3>
            <p class="text-center"> Get ready for your stay with StarCar Vehicle Rental.</p>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('images/misc/starcar_voucher.jpg') }}" class="img-fluid w-100" alt="Voucher: 50 Percent Off StarCar Vehicle Rental">
                </div>
                <div class="col-md-6 mt-2">
                    <h5>An offer just for you, {{ Auth::user()->name }}&excl;</h5>
                    <p>Craterview Casino &amp; Resort has partnered with StarCar Vehicle Rental to bring you exclusive savings. As a member, you get discounted access to all bronze tier vehicles. Just present this voucher to the StarCar team to claim your exclusive offer.</p>
                    <div class="d-flex flex-column flex-md-row justify-content-center gap-3 text-light mx-auto">
                        <a href="{{ asset('images/misc/starcar_voucher.jpg') }}" download class="btn xp-btn-secondary">
                            Download e-voucher
                        </a>
                    </div>
                </div>
            </div>
        </div> 
    </section>

@endsection
