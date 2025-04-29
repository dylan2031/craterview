<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewsController extends Controller
{
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
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'star_rating' => 'required|integer|min:1|max:5',
            'body' => 'required|string',
        ]);

        // Create review in DB
        Review::create($validated);

        //back to page
        return redirect('/reviews#top')->with('message', 'Thank you for your feedback. Your review has been submitted successfully.');
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
        return view('reviews.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $review = Review::findOrFail($id);
    
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'star_rating' => 'required|integer|min:1|max:5',
            'body' => 'required|string',
        ]);
    
        $review->update($validated);
    
        return redirect('/reviews#top')->with('message', 'Review updated successfully.');
    }    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    $review = Review::findOrFail($id);
    $review->delete();

    return redirect('/reviews#top')->with('message', 'Review deleted successfully.');
}

}
