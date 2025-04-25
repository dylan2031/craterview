@extends('layouts.app')

@section('content')
<div class="container-flex">
    <a onclick="history.back(); document.getElementById('results').scrollIntoView();" class="btn xp-btn-secondary">Back</a>
</div>
<div class="container">
    <h1>{{ $review->title }}</h1>

    <!-- Review Author and Date -->
    <p class="text-muted">
        <strong>Author's review left on</strong> 
        {{ $review->created_at->isoFormat('Do MMMM YYYY') }}
        @if ($review->created_at->year < 3002)
            <span class="badge bg-info text-dark ms-2" style="border: 1px solid #000;">🕰️ Time Traveler</span>
        @endif
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

    <!-- Review Body (retro XP "boxed" aesthetic) -->
    <div>
        <p>{{ $review->body }}</p>
    </div>
</div>

@endsection
