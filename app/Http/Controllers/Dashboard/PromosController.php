<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PromosController extends Controller
{
    public function index() {
        return view('user.perks.giveaway.page', [
            'windowTitle' => 'Giveaway',
        ]);
    }
}
