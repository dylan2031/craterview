<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class PromosController extends Controller
{
    // Main promos page
    public function index()
    {
        return view('user.perks.promos.index', [
            'windowTitle' => 'Promotions',
        ]);
    }

    // Monthly giveaway page
    public function monthlyGiveaway()
    {
        return view('user.perks.promos.giveaway.page', [
            'windowTitle' => 'Monthly Giveaway',
        ]);
    }
}