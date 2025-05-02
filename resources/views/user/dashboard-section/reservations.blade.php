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
                </tr>
            </thead>
            <tbody>
                @foreach($reviews as $review)
                <tr>
                    <td>{{ $review->title }}</td>
                    <td>{{ $review->star_rating }}</td>
                    
                    <td>
                        {{--Edit/delete will be under a dropdown to save on space for smaller screens--}}
                        <div class="dropdown">
                            <button class="btn xp-btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-gear"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>
                                    <a href="/reviews/{{ $review->id }}" class="dropdown-item text-dark px-3 py-2 rounded-3 hover:bg-light dash-dropdown">View</a></li>
                                <li>
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
</div>