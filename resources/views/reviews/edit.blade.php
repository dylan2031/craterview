@extends('layouts.app')

@section('content')
<div class="container-flex">
    <a onclick="history.back(); document.getElementById('results').scrollIntoView();" class="btn xp-btn-secondary">Back</a>
</div>
<div class="container">
    <h3 class="mt-4">Edit Review</h3>
    <form action="{{ route('reviews.update', $review->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Title -->
        <div class="mb-3">
            <label for="title" class="form-label">Review Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $review->title) }}" required>
        </div>
        <!-- Star Rating -->
        <div class="mb-3">
            <label class="form-label d-block">Star Rating</label>
            <div class="star-rating">
                @for ($i = 5; $i >= 1; $i--)
                    <input type="radio" name="star_rating" id="star{{ $i }}" value="{{ $i }}" {{ old('star_rating', $review->star_rating) == $i ? 'checked' : '' }} required>
                    <label for="star{{ $i }}"><i class="bi bi-star-fill"></i></label>
                @endfor
            </div>
        </div>
        <!-- Body -->
        <div class="mb-3">
            <label for="body" class="form-label">Your Review</label>
            <textarea class="form-control" id="body" name="body" rows="5" required>{{ old('body', $review->body) }}</textarea>
        </div>
        <!-- Submit -->
        <button type="submit" class="btn xp-btn-primary mb-5">Update Review</button>
    </form>
</div>
@endsection