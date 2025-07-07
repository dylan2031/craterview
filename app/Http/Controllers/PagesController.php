<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function entertainment()
    {
        $entJson = File::get(resource_path('data/entertainment.json'));
        $entertainment = json_decode($entJson, true);
    
        return view('pages.entertainment.index', compact('entertainment'));
    }

    public function about()
    {
        $teamJson = File::get(resource_path('data/team.json'));
        $team = json_decode($teamJson, true);
    
        $faqJson = File::get(resource_path('data/faqs.json'));
        $faqs = json_decode($faqJson, true);
    
        return view('pages.about.index', compact('team', 'faqs'));
    }
    

    public function teamMember($alias)
    {
        $team = json_decode(file_get_contents(resource_path('data/team.json')), true);
        $member = collect($team)->first(function ($item) use ($alias) {
            return Str::slug($item['alias']) === $alias;
        });

        if (!$member) {
            abort(404);
        }

        return view('pages.about.profile', ['member' => $member]);
    }

    public function saythanks(){
        return view('pages.saythanks.index');
    }

    public function dining()
    {
        $dining = json_decode(file_get_contents(resource_path('data/dining.json')), true);

        if (!$dining) {
            abort(404);
        }
        
        return view('pages.dining.index', compact('dining'));
    }

    public function rooms()
    {   
        $rooms = json_decode(file_get_contents(resource_path('data/rooms.json')), true);

        if (!$rooms) {
            abort(404);
        }

        return view('pages.rooms.index', compact('rooms'));
    }

    // show page for individual room

    public function showRoom($slug)
    {
        $rooms = json_decode(file_get_contents(resource_path('data/rooms.json')), true);

        // Find matching room by sluggified name
        foreach ($rooms as $room) {
            if (Str::slug($room['name']) === $slug) {
                return view('pages.rooms.show', ['room' => $room]);
            }
        }

        abort(404);
    }

    public function events(){
        return view('pages.events.index');
    }

    public function upcomingEvents()
    {   
        $events = json_decode(file_get_contents(resource_path('data/events.json')), true);

        if (!$events) {
            abort(404);
        }

        return view('pages.events.upcoming-events', compact('events'));
    }

    public function venues()
    {   
        $venues = json_decode(file_get_contents(resource_path('data/venues.json')), true);

        if (!$venues) {
            abort(404);
        }

        return view('pages.events.venue-hire', compact('venues'));
    }

    public function pool()
    {   
        $treatments = json_decode(file_get_contents(resource_path('data/spa.json')), true);

        if (!$treatments) {
            abort(404);
        }

        return view('pages.pool.index', compact('treatments'));
    }


}
