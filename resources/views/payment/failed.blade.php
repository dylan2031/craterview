@extends('layouts.app')

@section('content')
    <section>
        <div class="container text-center my-3">
            <h1 class="mb-2">Payment Failed</h1>
            <img src="/images/misc/sad.png" class="d-block mx-auto" alt="Sad face" width="64px">
            <p class="lead mt-2">We were unable to process your transaction at this time.</p>
            <p>This may be due to insufficient funds, an unexpected user-side anomaly, or a technical error.</p>
            <p>No currency has been deducted. You may attempt the payment again or choose an alternative method.</p>
            <p class="fw-bold">Thank you for choosing Craterview Casino &amp; Resort.</p>
        </div>
    </section>
    <hr>
    <section>
        <div class="container my-3">
            <h3 class="text-center">Stressed about your finances&quest;</h3>
            <p class="text-center">Take a <span class="fst-italic">moment</span> to unwind.</p>
            <span id="domino-section" style="display: none;">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="{{ asset('images/sponsors/domino-moments-sm.png') }}" class="img-fluid w-100" alt="Domino Cigarette Company Logo">
                        <p class="text-center text-muted fst-italic small mb-4">'Moments' is a registered trademark of Domino Cigarettes Ltd &copy;3002</p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('images/index/domino-products.png') }}" class="img-fluid w-100" alt="Domino products">
                        <div class="d-flex flex-column flex-md-row justify-content-center gap-3 text-light mx-auto">
                            <a href="/extranet-portal" class="btn xp-btn-primary">Shop now</a>
                            <a href="/extranet-portal" class="btn xp-btn-secondary">Donate</a>
                        </div>
                    </div>
                </div>
            </span>
        </div> 
    </section>
    <style>
        #domino-section {
            opacity: 0;
            transition: opacity 1s ease;
        }
        #domino-section.show {
            display: block;
            opacity: 1;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            setTimeout(function () {
                const section = document.getElementById('domino-section');
                if (section) {
                    section.style.display = 'block';
                    setTimeout(() => section.classList.add('show'), 50); // trigger fade-in
                }
            }, 3000);
        });
    </script>

@endsection
