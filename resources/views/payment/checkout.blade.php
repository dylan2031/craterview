@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <!-- Centered Card -->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header text-center">
                        <strong>Checkout</strong>
                      </div>                    
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row">Full name:</th>
                                    <td>{{ session('payment.name') }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Description:</th>
                                    <td>{{ session('payment.what') }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Price:</th>
                                    <td>Ω{{ session('payment.price') }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Quantity:</th>
                                    <td>{{ session('payment.quantity') }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Message:</th>
                                    <td>{{ session('payment.message') }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="text-center">Choose a payment option:</p>

                        <div class="row justify-content-center">
                            <div class="col d-flex justify-content-center">
                                <form action="{{ route('payment.confirm') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="payment_confirmed" value="true">
                                    <div class="">
                                        <button type="submit" class="btn">
                                            <img src="{{ asset('images/payment/speedypay.png') }}" width="120" height="auto" class="img-fluid pb-1">
                                        </button>  
                                    </div>
                                </form>   
                            </div>
                            <div class="col d-flex justify-content-center">
                                <button class="btn">
                                    <img src="{{ asset('images/payment/biopay.png') }}" width="120" height="auto" class="img-fluid pb-1">
                                </button>   
                            </div>
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
