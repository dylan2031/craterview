<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use File;

class EntertainmentController extends Controller
{
    public function index()
    {
        $entJson = File::get(resource_path('data/entertainment.json'));
        $entertainment = json_decode($entJson, true);

        return view('pages.entertainment', compact('entertainment'));
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $entJson = File::get(resource_path('data/entertainment.json'));
        $entertainment = json_decode($entJson, true);
    
        // Filter by name
        $filtered = array_filter($entertainment, function($item) use ($searchTerm) {
            return stripos($item['name'], $searchTerm) !== false || 
            collect($item['keywords'])->contains(fn($keyword) => stripos($keyword, $searchTerm) !== false);


        });
    
        return view('pages.entertainment', [
            'entertainment' => $entertainment,
            'filtered' => $filtered,
            'scrollTo' => 'search',
        ]);
    }

    
    public function show($slug)
    {
        $path = resource_path('data/entertainment.json');
        $entertainmentItems = json_decode(file_get_contents($path), true);


        $item = collect($entertainmentItems)->first(function ($entry) use ($slug) {
            return Str::slug($entry['name']) === $slug;
        });

        if (!$item) {
            abort(404);
        }

        // Get a random item from the same location (excluding the current item)
        // this is done to suggest another entertainment in the same location
        $randomItem = collect($entertainmentItems)
        ->where('location', $item['location'])
        ->where('name', '!=', $item['name'])
        ->random();


        return view('pages.show', compact('item', 'randomItem'));    }
    
}
