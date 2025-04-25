@php
    // Get the reviews data
    $reviews = \App\Models\Review::all();

    // Calculate the average rating
    $averageRating = $reviews->avg('star_rating');

    // Count the number of reviews for each star rating
    $fiveStars = $reviews->where('star_rating', 5)->count();
    $fourStars = $reviews->where('star_rating', 4)->count();
    $threeStars = $reviews->where('star_rating', 3)->count();
    $twoStars = $reviews->where('star_rating', 2)->count();
    $oneStar = $reviews->where('star_rating', 1)->count();

    // Get the total number of reviews
    $totalReviews = $reviews->count();

    // Craterview aims for a 3 star average in reviews

    // If review average is not 3, calculate how far above of behind 3 average the reviews currently are
    if ($averageRating !== 3.0) {
        $points = $averageRating - 3;
    }

    // See if review average exceeds target of 3. Generate custom message based on target
    if ($averageRating > 3) {
        $targetMessage = "We are currently exceeding our target by " . $points . " points!";
    } elseif ($averageRating == 3) {
        $targetMessage = "We are currently on target!";
    } else {
        $targetMessage = "We are behind our target by " . abs($points) . " points. We hear and appreciate your feedback, and are working hard to improve your experience!";
    }

@endphp

<div class="card">
    <h5 class="card-header">Overview</h5>
    <div class="card-body">
        <!-- Display the average rating -->
        <h5 class="card-title">
            Average: {{ number_format($averageRating, 1) }}
            <span class="text-muted" style="font-size: 0.9rem; font-family: sans-serif;">({{ $totalReviews }} reviews)</span>
        </h5>        

        <p class="card-title">Target: 3 stars<br>{{$targetMessage}}</p>
        
        <!-- 5 stars -->
        <div class="d-flex align-items-center mb-2">
            <span class="me-2" style="width: 70px;">5 stars</span>
            <div class="progress flex-grow-1" style="height: 20px;">
                <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $totalReviews ? ($fiveStars / $totalReviews) * 100 : 0 }}%;" aria-valuenow="{{ $fiveStars }}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        
        <!-- 4 stars -->
        <div class="d-flex align-items-center mb-2">
            <span class="me-2" style="width: 70px;">4 stars</span>
            <div class="progress flex-grow-1" style="height: 20px;">
                <div class="progress-bar bg-info" role="progressbar" style="width: {{ $totalReviews ? ($fourStars / $totalReviews) * 100 : 0 }}%;" aria-valuenow="{{ $fourStars }}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        
        <!-- 3 stars -->
        <div class="d-flex align-items-center mb-2">
            <span class="me-2" style="width: 70px;">3 stars</span>
            <div class="progress flex-grow-1" style="height: 20px;">
                <div class="progress-bar bg-success" role="progressbar" style="width: {{ $totalReviews ? ($threeStars / $totalReviews) * 100 : 0 }}%;" aria-valuenow="{{ $threeStars }}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        
        <!-- 2 stars -->
        <div class="d-flex align-items-center mb-2">
            <span class="me-2" style="width: 70px;">2 stars</span>
            <div class="progress flex-grow-1" style="height: 20px;">
                <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $totalReviews ? ($twoStars / $totalReviews) * 100 : 0 }}%;" aria-valuenow="{{ $twoStars }}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        
        <!-- 1 star -->
        <div class="d-flex align-items-center mb-2">
            <span class="me-2" style="width: 70px;">1 star</span>
            <div class="progress flex-grow-1" style="height: 20px;">
                <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $totalReviews ? ($oneStar / $totalReviews) * 100 : 0 }}%;" aria-valuenow="{{ $oneStar }}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>             
    </div>
</div>