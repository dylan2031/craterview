@extends('layouts.dash-window')

@section('content')
<div style="min-height: 40vh;">
    @if(count($reservations) > 0)

        {{-- Desktop Table --}}
        <div class="d-none d-md-block">
            <table class="table table-striped table-white">
                <thead>
                    <tr>
                        <th scope="col">Confirmation Number</th>
                        <th scope="col">Name</th>
                        <th scope="col">Room Type</th>
                        <th scope="col">Nights</th>
                        <th scope="col">Check-in</th>
                        <th scope="col">Check-out</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">Special Request</th>
                        <th scope="col"></th> {{-- dropdown --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach($reservations as $reservation)
                    <tr>
                        <td>{{ str_pad($reservation->id, 5, '0', STR_PAD_LEFT) }}</td>
                        <td>{{ $reservation->name }}</td>
                        <td>{{ ucfirst($reservation->room_type) }}</td>
                        <td>{{ $reservation->nights }}</td>
                        <td>{{ \Carbon\Carbon::parse($reservation->check_in)->format('d/m/Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($reservation->check_out)->format('d/m/Y') }}</td>
                        <td>Ω{{ number_format($reservation->total_price, 2) }}</td>
                        <td>{{ $reservation->special_request ?? '-' }}</td>
                        <td>
                            {{-- View/cancel dropdown --}}
                            <div class="dropdown">
                                <button class="btn xp-btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-gear"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <a href="{{ route('reservations.confirmation', ['id' => $reservation->id]) }}" class="dropdown-item text-dark px-3 py-2 rounded-3 hover:bg-light dash-dropdown">View</a>
                                    </li>
                                    <li>
                                        <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item text-dark px-3 py-2 rounded-3 hover:bg-light dash-dropdown" onclick="return confirm('SpaceSync™ Comm Buoy Satellite (ID: SHD-N7) says:\n\n>>>ESTABLISHING MARS CONNECTION\n>>>CONNECTION ESTABLISHED\n\nTHIS RECORD WILL BE DELETED. THIS ACTION CANNOT BE UNDONE.\n\nCLICK OK TO PROCEED')">Delete</button>
                                        </form>
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
            @foreach($reservations as $reservation)
            <div class="card mb-3">
                <div class="card-body">
                    <p><strong>Confirmation Number:</strong> {{ str_pad($reservation->id, 5, '0', STR_PAD_LEFT) }}</p>
                    <p><strong>Name:</strong> {{ $reservation->name }}</p>
                    <p><strong>Room Type:</strong> {{ ucfirst($reservation->room_type) }}</p>
                    <p><strong>Nights:</strong> {{ $reservation->nights }}</p>
                    <p><strong>Check-in:</strong> {{ \Carbon\Carbon::parse($reservation->check_in)->format('d/m/Y') }}</p>
                    <p><strong>Check-out:</strong> {{ \Carbon\Carbon::parse($reservation->check_out)->format('d/m/Y') }}</p>
                    <p><strong>Total Price:</strong> Ω{{ number_format($reservation->total_price, 2) }}</p>
                    <p><strong>Special Request:</strong> {{ $reservation->special_request ?? '-' }}</p>

                    <div class="dropdown mt-2">
                        <button class="btn xp-btn-secondary dropdown-toggle w-100" type="button" data-bs-toggle="dropdown">
                            Actions
                        </button>
                        <ul class="dropdown-menu w-100">
                            <li>
                                <a href="{{ route('reservations.confirmation', ['id' => $reservation->id]) }}" class="dropdown-item">View</a>
                            </li>
                            <li>
                                <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="dropdown-item text-dark px-3 py-2 rounded-3 hover:bg-light dash-dropdown" onclick="return confirm('SpaceSync™ Comm Buoy Satellite (ID: SHD-N7) says:\n\n>>>ESTABLISHING MARS CONNECTION\n>>>CONNECTION ESTABLISHED\n\nTHIS RECORD WILL BE DELETED. THIS ACTION CANNOT BE UNDONE.\n\nCLICK OK TO PROCEED')">Delete</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex mt-4">
            {{ $reservations->withQueryString()->links('pagination::bootstrap-5') }}
        </div>         
    @else
        <p>You have no upcoming reservations.</p>
    @endif
</div>
@endsection
