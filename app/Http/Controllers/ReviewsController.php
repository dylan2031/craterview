<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Services\AIReviewResponder;
use Illuminate\Support\Facades\Validator;

class ReviewsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    
    {
        $reviews = Review::orderBy('id', 'desc')->paginate(6);
        return view('reviews.index')->with('reviews', $reviews);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = Validator::make($request->all(), [
            'title' => [
                'required',
                'string',
                'max:255',
            ],
            'star_rating' => [
                'required',
                'integer',
                'between:1,5',
            ],
            'body' => [
                'required',
                'string',
                'max:5000',
            ],
        ], [
            'title.required' => 'Review title cannot be blank',
            'title.max' => 'Review title exceeds character limit',

            'star_rating.required' => 'Please select a star rating',
            'star_rating.between' => 'Star rating must be between 1 and 5',

            'body.required' => 'Review body cannot be blank',
            'body.max' => 'Review is too long',
        ])->validate();

        // Add the user_id to the validated data
        $validated['user_id'] = auth()->id();

        // Create review in DB
        $review = Review::create($validated);

        // Respond to review
        $aiResponder = new AIReviewResponder();
        $review->response = $aiResponder->generateResponse($review);
        $review->save();

        // Back to page
        return redirect('/reviews#top')->with('message', 'Thank you for your feedback. Your review has been submitted successfully.')
        ->with('aiNotification', true);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $review = Review::find($id);
        return view('reviews.show')->with('review', $review);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $review = Review::findOrFail($id);

        // If post does not belong to user, return 403
        if (auth()->user()->id !== $review->user_id) {
            abort(403);
        }

        return view('reviews.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $review = Review::findOrFail($id);
    
        $validated = Validator::make($request->all(), [
            'title' => [
                'required',
                'string',
                'max:255',
            ],
            'star_rating' => [
                'required',
                'integer',
                'between:1,5',
            ],
            'body' => [
                'required',
                'string',
                'max:5000',
            ],
        ], [
            'title.required' => 'Review title cannot be blank',
            'title.max' => 'Review title exceeds character limit',

            'star_rating.required' => 'Please select a star rating',
            'star_rating.between' => 'Star rating must be between 1 and 5',

            'body.required' => 'Review body cannot be blank',
            'body.max' => 'Review is too long',
        ])->validate();
    
        $review->update($validated);
    
        return redirect('/reviews#top')->with('message', 'Review updated successfully.');
    }    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $review = Review::findOrFail($id);

        // If post does not belong to user, return 403
        if (auth()->user()->id !== $review->user_id) {
            abort(403);
        }
        
        $review->delete();

        return redirect('/dashboard')->with('message', 'Review deleted successfully.');
    }

}
