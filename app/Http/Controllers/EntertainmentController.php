<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

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
        // Retrieve the 'included_in_pass' filter values and convert 'true' string to boolean true
        $includedInPass = $request->input('included_in_pass', []);
        $includedInPass = array_map(function($value) {
            return $value === 'true'; // 'true' string becomes boolean true, otherwise false
        }, $includedInPass);
    
        // Retrieve the 'age_suitability' filter values
        $ageSuitability = $request->input('age_suitability', []); // ['All Ages', '13 and up', 'Adults']
    
        // Retrieve the 'category' filter values
        $categories = $request->input('category', []); // ['amusement', 'gambling', 'shopping', 'nightlife', 'exhibition', 'excursion']
    
        // Retrieve the 'location' filter values
        $locations = $request->input('location', []); // ['Main Building', 'Pavilion', 'The Strip™', 'Nebula Park', 'The Crater']
    
        $searchTerm = $request->input('query');
        $entJson = File::get(resource_path('data/entertainment.json'));
        $entertainment = json_decode($entJson, true);
        
        $filtered = array_filter($entertainment, function($item) use ($searchTerm, $includedInPass, $ageSuitability, $categories, $locations) {
            // If there's no search query, skip the text filtering
            $matchesSearchTerm = true; // Default to true if no search term
            if ($searchTerm) {
                // If there's a search query, apply the text filter
                $matchesSearchTerm = stripos($item['name'], $searchTerm) !== false || 
                    collect($item['keywords'])->contains(fn($keyword) => stripos($keyword, $searchTerm) !== false);
            }
    
            // FunPass filter
            $matchesFunPass = empty($includedInPass) || in_array($item['included_in_pass'], $includedInPass);
            
            // Age Suitability filter
            $matchesAgeSuitability = empty($ageSuitability) || in_array($item['age_suitability'], $ageSuitability);
    
            // Category filter
            $matchesCategory = empty($categories) || in_array($item['category'], $categories);
    
            // Location filter
            $matchesLocation = empty($locations) || in_array($item['location'], $locations);
    
            return $matchesSearchTerm && $matchesFunPass && $matchesAgeSuitability && $matchesCategory && $matchesLocation;
        });
    
        // Sort by
        $sort = $request->input('sort');
        if ($sort === 'featured') {
            usort($filtered, function ($a, $b) {
                return ($b['featured'] ?? false) <=> ($a['featured'] ?? false);
            });
        } elseif (in_array($sort, ['asc', 'desc'])) {
            usort($filtered, function ($a, $b) use ($sort) {
                return $sort === 'asc'
                    ? $a['price'] <=> $b['price']
                    : $b['price'] <=> $a['price'];
            });
        }
    
        return view('pages.entertainment', [
            'entertainment' => $entertainment,
            'filtered' => $filtered,
            'scrollTo' => 'results',
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

        return view('pages.show', compact('item', 'randomItem'));
    }
    
}