@extends('layouts.dash-window')

@section('content')
<div style="min-height: 40vh;">
    @if(count($reviews) > 0)

        {{-- Desktop Table --}}
        <div class="d-none d-md-block">
            <table class="table table-striped table-white">
                <thead>
                    <tr>
                        <th scope="col">Created at</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Title</th>
                        <th scope="col"></th> {{-- dropdown --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach($reviews as $review)
                    <tr>
                        <td>{{ $review->created_at }} Earth Standard Time</td>
                        <td>{{ $review->star_rating }}</td>
                        <td>{{ $review->title }}</td>
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
                                            <button type="submit" class="dropdown-item text-dark px-3 py-2 rounded-3 hover:bg-light dash-dropdown" onclick="return confirm('SpaceSync™ Comm Buoy Satellite (ID: SHD-N7) says:\n\n>>>ESTABLISHING MARS CONNECTION\n>>>CONNECTION ESTABLISHED\n\nDELETION REQUEST IS READY TO SEND\n\nTHIS WILL BE REFLECTED ON YOUR ACCOUNT IMMEDIATELY, BUT PLEASE BE AWARE THAT TRANSMISSION TO MARS MAY TAKE UP TO 10 BUSINESS DAYS\n\nCLICK OK TO PROCEED')">Delete</button>
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
            @foreach($reviews as $review)
            <div class="card mb-3">
                <div class="card-body">
                    <p><strong>Created at:</strong> {{ $review->created_at }} Earth Standard Time</p>
                    <p><strong>Rating:</strong> {{ $review->star_rating }} </p>
                    <p><strong>Title:</strong> {{ $review->title }} </p>

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
                                        <button type="submit" class="dropdown-item text-dark px-3 py-2 rounded-3 hover:bg-light dash-dropdown" onclick="return confirm('SpaceSync™ Comm Buoy Satellite (ID: SHD-N7) says:\n\n>>>ESTABLISHING MARS CONNECTION\n>>>CONNECTION ESTABLISHED\n\nDELETION REQUEST IS READY TO SEND\n\nTHIS WILL BE REFLECTED ON YOUR ACCOUNT IMMEDIATELY, BUT PLEASE BE AWARE THAT TRANSMISSION TO MARS MAY TAKE UP TO 10 BUSINESS DAYS\n\nCLICK OK TO PROCEED')">Delete</button>
                                    </form>    
                                </li>
                            </ul>
                        </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex mt-4">
            {{ $reviews->withQueryString()->links('pagination::bootstrap-5') }}
        </div>         
    @else
        <p>You haven't left any reviews yet. When you do, they will appear here.</p>
    @endif
</div>
@endsection
