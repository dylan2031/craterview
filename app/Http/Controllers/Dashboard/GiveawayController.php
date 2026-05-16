<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class GiveawayController extends Controller
{
    public function index() {
        return view('user.perks.giveaway.page', [
            'windowTitle' => 'Giveaway',
        ]);
    }
}
