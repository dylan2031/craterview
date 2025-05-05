<div>
    {{-- Show upcoming reservations (today and onwards) --}}
    <h3>Upcoming reservations</h3>
    @if(count($upcomingReservations) > 0)
        <table class="table table-striped table-white">
            <thead>
                <tr>
                    <th scope="col" class="col-5">Duration</th>
                    <th scope="col" class="col-5">Room Type</th>
                    <th scope="col" class="col-2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($upcomingReservations as $reservation)
                <tr>
                    <td>
                        {{ $reservation->nights }} nights
                        <br>
                        Check in: {{ \Carbon\Carbon::parse($reservation->check_in)->format('d/m/Y') }}
                        <br>
                        Departure: {{ \Carbon\Carbon::parse($reservation->check_out)->format('d/m/Y') }}
                    </td>
                    <td>{{ ucfirst($reservation->room_type) }}</td>
                    <td>
                        {{-- View/cancel under dropdown --}}
                        <div class="dropdown">
                            <button class="btn xp-btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-gear"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>
                                    <a href="{{ route('reservations.confirmation', ['id' => $reservation->id]) }}" class="dropdown-item text-dark px-3 py-2 rounded-3 hover:bg-light dash-dropdown">View</a></li>
                                </li>
                                <li>
                                    <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item text-dark px-3 py-2 rounded-3 hover:bg-light dash-dropdown" onclick="return confirm('This cannot be undone.')">Delete</button>
                                    </form>                             
                                </li>
                            </ul>
                        </div>
                    </td>                 
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>You have no upcoming reservations.</p>
    @endif

    {{-- Show past reservations --}}
    <h3>Past reservations</h3>
    @if(count($pastReservations) > 0)
        <table class="table table-striped table-white">
            <thead>
                <tr>
                    <th scope="col" class="col-5">Duration</th>
                    <th scope="col" class="col-5">Room Type</th>
                    <th scope="col" class="col-2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($pastReservations as $reservation)
                <tr>
                    <td>
                        {{ $reservation->nights }} nights
                        <br>
                        Check in: {{ \Carbon\Carbon::parse($reservation->check_in)->format('d/m/Y') }}
                        <br>
                        Departure: {{ \Carbon\Carbon::parse($reservation->check_out)->format('d/m/Y') }}
                    </td>
                    <td>{{ ucfirst($reservation->room_type) }}</td>
                    <!--<td><a href="{{ route('reservations.confirmation', ['id' => $reservation->id]) }}" class="btn xp-btn-secondary">View</a></td>-->
                    <td>
                        {{-- View/leave feedback under dropdown --}}
                        <div class="dropdown">
                            <button class="btn xp-btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-gear"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>
                                    <a href="{{ route('reservations.confirmation', ['id' => $reservation->id]) }}" class="dropdown-item text-dark px-3 py-2 rounded-3 hover:bg-light dash-dropdown">View</a></li>
                                </li>
                                <li>
                                    <a href="/reviews/create" class="dropdown-item text-dark px-3 py-2 rounded-3 hover:bg-light dash-dropdown">Review your stay</a></li>
                                </li>
                            </ul>
                        </div>
                    </td>                    
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Your past reservations will appear here.</p>
    @endif

    {{-- My Reviews --}}
    <h3>Your feedback</h3>
    <h5 class="mt-3">Actions</h5>
    <a href="/reviews/create" class="btn xp-btn-primary"><i class="bi bi-star"></i> Write a review</a>
    <h5 class="mt-3">My reviews</h5>
    @if(count($reviews) > 0)
        <table class="table table-striped table-white">
            <thead>
                <tr>
                    <th scope="col" class="col-5">Review</th>
                    <th scope="col" class="col-5">Rating</th>
                    <th scope="col" class="col-2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($reviews as $review)
                <tr>
                    <td>{{ $review->title }}</td>
                    <td>{{ $review->star_rating }}</td>
                    <td>
                        {{-- Edit/delete under dropdown --}}
                        <div class="dropdown">
                            <button class="btn xp-btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-gear"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>
                                    <a href="/reviews/{{ $review->id }}" class="dropdown-item text-dark px-3 py-2 rounded-3 hover:bg-light dash-dropdown">View</a></li>
                                <li>
                                    <a href="/reviews/{{ $review->id }}/edit" class="dropdown-item text-dark px-3 py-2 rounded-3 hover:bg-light dash-dropdown">Edit</a></li>
                                <li>
                                    <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item text-dark px-3 py-2 rounded-3 hover:bg-light dash-dropdown" onclick="return confirm('Are you sure you want to delete this review?')">Delete</button>
                                    </form>    
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>It looks like you haven't written any reviews yet. When you do, your reviews will be listed here.</p> 
    @endif
    <br>
</div>
