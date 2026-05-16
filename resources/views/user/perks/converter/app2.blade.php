@extends('layouts.dash-window')

@section('content')

@php

    // raw input of post
    $validation = $_POST['amount'] ?? 1;

    // no error by default
    $error = false;

    // validate
    if ($validation !== '' && is_numeric($validation) && $validation < 999999999999999 && $validation >= 0.01) {

        $amount = (float) $validation;

    } else {

        $error = true;

        $amount = (float) 1;

        if (!is_numeric($validation)) {

            $feedback = "PLEASE ENTER A NUMERIC VALUE";

        } elseif ($validation === '') {

            $feedback = "PLEASE ENTER A VALUE";

        } elseif ($validation >= 999999999999999) {

            $feedback = "AMOUNT VERY UNLIKELY IN THIS ECONOMY";

        } elseif ($validation < 0.01) {

            $feedback = "NUMBER TOO SMALL, ENTER A MINIMUM OF ONE PENCE";

        } else {

            $feedback = "INVALID INPUT";

        }

    }
    
    $conv = $amount * 2.16;

@endphp

<div class="px-4 py-5 text-center">
    <img class="d-block mx-auto mb-4" src="/images/icons/preconv/conv.png" alt="" width="72" height="72">
    <h1 class="display-5 fw-bold">Currency Converter</h1>
    <div class="col-lg-6 mx-auto">
        <p class="mb-4">Guests of Craterview Casino &amp; Resort are encouraged to embrace the OmniDollar &lpar;&Omega;&rpar;, a decentralised currency officially recognised 
        and supported in all of Mars's designed tax-free zones.
        </p>
        <div class="card bg-dark text-light border-primary shadow-lg">
            <div class="card-body p-5">
                    <p class="display-5 fw-bold" style="font-family : Orbitron">
                        <span style="color:#7fff00;">U&dollar;{{ number_format($amount, 2) }}</span>
                        <br>
                        <img src="{{ asset('/images/icons/preconv/conv.png') }}" alt="convert" class="mx-1" style="width:32px; height:32px;">
                        <br>
                        <span style="color:#1E90FF;">&Omega;{{ number_format($conv, 2) }}</span>
                    </p>
                    <div class="fw-bold mb-4">
                        1 UGC &lpar;U&dollar;&rpar; = 2.16 OMNIDOLLAR &lpar;&Omega;&rpar;
                    </div>
                <form method="POST" action="{{ url()->current() }}">
                    @csrf
                    <div class="mb-3 input-group">
                        <span class="input-group-text">U&dollar;</span>
                        <input
                            value="{{ $_POST['amount'] ?? '' }}"
                            type = number
                            step="0.01"
                            class="form-control form-control-lg"
                            name="amount"
                            placeholder="Enter amount in U&dollar;"
                            required
                        >
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success btn-lg fw-bold">
                            Convert to OmniDollar
                        </button>
                    </div>
                </form>
                @if($error)
                    <p class="mt-4 fw-bold">ERROR&colon; {{ $feedback }}</p>
                @endif
               <p class="fw-bold mt-4"><a href="/dashboard/currency-converter">Convert from Earth Pounds instead</a></p>
               <small>Rates updated every 10 business days. Amounts shown are for advisory purposes only.</small>
            </div>
        </div>
    </div>
</div>

@endsection