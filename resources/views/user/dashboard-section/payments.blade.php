<div>
    <br>
    @if(count($upcomingReservations) > 0)
        <table class="table table-striped table-white table-bordered">
            <thead>
                <tr>
                    <th scope="col" class="col-5">Amount</th>
                    <th scope="col" class="col-5">Paid on</th>
                    <th scope="col" class="col-2">Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach($payments as $payment)
                    <tr>
                        <td>{{ $payment->amount }}</td>
                        <td>{{ \Carbon\Carbon::parse($payment->created_at)->format('d/m/Y') }}</td>
                        <td>{{ $payment->description }}</td>
                    <tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p>Your payment history will appear here.</p>
    @endif
</div>
