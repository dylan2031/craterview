@extends('layouts.app')

@section('content')
    <section class="position-relative text-center text-light">
        <img 
            src="{{ asset('images/reviews/reviews.png') }}" 
            class="img-fluid w-100" 
            style="object-fit: cover; height: 80vh;" 
            alt="Hotel Business Center"
        >
    
        <div class="position-absolute top-50 start-50 translate-middle w-100 px-3">
            <h1 class="mb-2">Reviews</h1>
            <img src="{{ asset('images/index/stars.png') }}" alt="3 star rating" class="img-fluid mx-auto d-block">   
            <h3>Rated 3 stars by the Intergalactic Hotel Standards Committee</h3>
            <br>
            <div class="container">
                <p>
                    Craterview Casino & Resort was praised for our welcoming atmosphere, clean and comfortable facilities, 
                    and unique offerings. The committee was particularly impressed with our family-friendly attractions and 
                    our attentive, friendly staff...
                </p>
                <h3>...and our guests agree!</h3>
                <br>
                <button class="btn xp-btn-primary">Show me!</button>
            </div>  
        </div>
    </section>
    <section>
        <div class="container">
            <br>
            @include('includes.review-calculations')
            <br>
            <h3 class="text-center">Guest Reviews</h3>
            <div>
                @if (count($reviews)>0)
                    @foreach ($reviews as $review)
                        <div class="xp-card card-text p-3 mb-3">
                            <p class="mb-0">User says...</p>
                            <small class="text-muted">
                                {{ $review->created_at->format('M j, Y') }}

                                {{--show time traveler if date is before 3002--}}
                                @if ($review->created_at->year < 3002)
                                    <span class="badge bg-info text-dark ms-2" style="border: 1px solid #000;">🕰️ Time Traveler</span>
                                @endif
                            </small>
                            <h3>{{$review->title}}</h3>
                            <h3>
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $review->star_rating)
                                        <i class="bi bi-star-fill" style="color: gold;"></i>
                                    @else
                                        <i class="bi bi-star text-secondary"></i>
                                    @endif
                                @endfor
                            </h3>
                            <p>
                                <strong>Preview:</strong> &ldquo;{{ Str::words($review->body, 16) }}&rdquo;
                            </p>
                            
                            <a href="/reviews/{{$review->id}}" class="btn xp-btn-primary">Read full review</a>
                        </div>
                    @endforeach
                @else
                <p>Nothing here yet...</p>
                <p>Be the first to leave a review!</p>
                @endif
            </div>
        </div>
    </section>

@endsection