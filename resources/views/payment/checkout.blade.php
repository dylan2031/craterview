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
                                    <th scope="row">Message:</th>
                                    <td>{{ session('payment.message') }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="text-center">Choose a payment option:</p>

                        <!-- Speedy pay (instant) -->
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
                            <!-- BioPay -->
                            <div class="col d-flex justify-content-center">
                                <!-- Form to trigger setting biopay to true -->
                                <form action="{{ route('payment.setBiopay') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="biopay" value="true">
                                    <button type="submit" class="btn">
                                        <img src="{{ asset('images/payment/biopay.png') }}" width="120" height="auto" class="img-fluid pb-1">
                                    </button>
                                </form>
                                <!-- JavaScript to automatically open the modal if 'biopay' session is true -->
                                @if(session('biopay') === true)
                                <script>
                                    document.addEventListener('DOMContentLoaded', function () {
                                        // Open the modal programmatically
                                        var bioModal = new bootstrap.Modal(document.getElementById('bioModal'));
                                        bioModal.show();
                                    });
                                </script>
                                @endif
                                <!-- Conditionally include the modal if biopay is true -->
                                @if(session('biopay') === true)
                                    @include('payment.biopay')
                                @endif
                            </div>
                            <!-- NeuraChip -->
                            <div class="col d-flex justify-content-center">
                                <button data-bs-toggle="modal" data-bs-target="#neuraModal" class="btn">
                                    <img src="{{ asset('images/payment/neurachip.png') }}" width="120" height="auto" class="img-fluid pb-1">
                                    @include('payment.neurachip')
                                </button>  
                            </div>
                            
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
