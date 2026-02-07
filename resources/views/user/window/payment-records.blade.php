@extends('layouts.dash-window')

@section('content')
<div style="min-height: 40vh;">
    @if(count($payments) > 0)

        {{-- Desktop Table --}}
        <div class="d-none d-md-block">
            <table class="table table-striped table-white">
                <thead>
                    <tr>
                        <th scope="col">Transaction Number</th>
                        <th scope="col">Date/Time</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Description</th>
                        <th scope="col"></th> {{-- dropdown --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach($payments as $payment)
                    <tr>
                        <td>{{ str_pad($payment->id, 5, '0', STR_PAD_LEFT) }}</td>
                        <td>{{ $payment->created_at }} Earth Standard Time</td>
                        <td>Ω{{ $payment->amount }}</td>
                        <td>{{ $payment->description }}</td>
                        <td>
                            {{-- View/cancel dropdown --}}
                            <div class="dropdown">
                                <button class="btn xp-btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-gear"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <a href="#" class="dropdown-item text-dark px-3 py-2 rounded-3 hover:bg-light dash-dropdown" data-bs-toggle="modal" data-bs-target="#refundModal">Request refund</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- Mobile Cards --}}
        <div class="d-block d-md-none">
            @foreach($payments as $payment)
            <div class="card mb-3">
                <div class="card-body">
                    <p><strong>Transaction Number:</strong> {{ str_pad($payment->id, 5, '0', STR_PAD_LEFT) }}</p>
                    <p><strong>Date/Time:</strong> {{ $payment->created_at }} Earth Standard Time</p>
                    <p><strong>Amount:</strong> Ω{{ $payment->amount }}</p>
                    <p><strong>Description:</strong> {{ $payment->description }}</p>

                    <div class="dropdown mt-2">
                        <button class="btn xp-btn-secondary dropdown-toggle w-100" type="button" data-bs-toggle="dropdown">
                            Actions
                        </button>
                        <ul class="dropdown-menu w-100">
                            <li>
                                <a href="#" class="dropdown-item text-dark px-3 py-2 rounded-3 hover:bg-light dash-dropdown" data-bs-toggle="modal" data-bs-target="#refundModal">Request refund</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex mt-4">
            {{ $payments->withQueryString()->links('pagination::bootstrap-5') }}
        </div>         
    @else
        <p>You haven't made any payments yet. A record of your payments will appear here.</p>
    @endif

    @include('user.window.no-refunds')
</div>
@endsection
