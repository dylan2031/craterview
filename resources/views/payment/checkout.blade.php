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

                        <!-- Optional: You can add a button to confirm the payment -->
                        <div class="d-flex justify-content-center mt-4">
                            <a href="{{ route('payment.confirm') }}" class="btn btn-success">Confirm Payment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
