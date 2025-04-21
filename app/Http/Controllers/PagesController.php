<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function entertainment()
    {
        $entJson = File::get(resource_path('data/entertainment.json'));
        $entertainment = json_decode($entJson, true);
    
        return view('pages.entertainment', compact('entertainment'));
    }

    public function about()
    {
        $teamJson = File::get(resource_path('data/team.json'));
        $team = json_decode($teamJson, true);
    
        $faqJson = File::get(resource_path('data/faqs.json'));
        $faqs = json_decode($faqJson, true);
    
        return view('pages.about', compact('team', 'faqs'));
    }
    

    public function teamMember($alias)
    {
        $team = json_decode(file_get_contents(resource_path('data/team.json')), true);
        $member = collect($team)->firstWhere('alias', $alias);

        if (!$member) {
            abort(404);
        }

        return view('pages.profile', ['member' => $member]);
    }


}
