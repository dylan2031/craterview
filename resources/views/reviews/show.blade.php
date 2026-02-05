@extends('layouts.app')

@section('content')
<div class="container-flex">
    <a onclick="history.back(); document.getElementById('results').scrollIntoView();" class="btn xp-btn-secondary">Back</a>
</div>
<div class="container">
    <h1>{{ $review->title }}</h1>

    <!-- Review Author and Date -->
    <p class="text-muted">
        <strong>{{ $review->user->name }}'s</strong> review left on
        {{ $review->created_at->format('M j, ') . ($review->fictional_year ?? $review->created_at->year) }}
    </p>

    <!-- Review Star Rating -->
    <div class="mb-3">
        <h3>
            @for ($i = 1; $i <= 5; $i++)
                @if ($i <= $review->star_rating)
                    <i class="bi bi-star-fill text-warning" style="font-size: 1.5rem; filter: drop-shadow(2px 2px 3px rgba(0, 0, 0, 0.5));"></i>
                @else
                    <i class="bi bi-star text-muted" style="font-size: 1.5rem; filter: drop-shadow(1px 1px 3px rgba(0, 0, 0, 0.5));"></i>
                @endif
            @endfor
        </h3>
    </div>

    <!-- Review Body -->
    <div>
        <p>{{ $review->body }}</p>
    </div>

    {{-- Hide actions if not logged in--}}
    @auth
        {{-- Only show actions of post belongs to user--}}
        @if(Auth::user()->id == $review->user_id)
            <a href="{{$review->id}}/edit" class="btn xp-btn-secondary">Edit review</a>
            <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn xp-btn-secondary" onclick="return confirm('SpaceSync™ Comm Buoy Satellite (ID: SHD-N7) says:\n\n>>>ESTABLISHING MARS CONNECTION\n>>>CONNECTION ESTABLISHED\n\nDELETION REQUEST IS READY TO SEND\n\nCLICK OK TO PROCEED')">Delete Review</button>
            </form>  
        @endif  
    @endauth

    {{-- Response to review --}}
    @include('reviews.response', ['response' => $review->response])

</div>

@endsection
