<div>
    <h3>Your feedback</h3>
    <h5 class="mt-4">Actions</h5>
    <a href="/reviews/create" class="btn xp-btn-primary"><i class="bi bi-star"></i> Write a review</a>
    <h5 class="mt-4">My reviews</h5>
    @if(count($reviews)>0)
        <table class="table table-striped table-white">
            <thead>
                <tr>
                    <th scope="col">Review</th>
                    <th scope="col">Rating</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($reviews as $review)
                <tr>
                    <td>{{ $review->title }}</td>
                    <td>{{ $review->star_rating }} out of 5</td>
                    <td><a href="/reviews/{{ $review->id }}/edit" class="btn xp-btn-secondary">Edit review</a></td>
                    <td>
                        <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn xp-btn-secondary" onclick="return confirm('Are you sure you want to delete this review?')">Delete Review</button>
                        </form>    
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>It looks like you haven't written any reviews yet. When you do, your reviews will be listed here.</p>
    @endif
</div>