<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PastReservationsController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $reservations = $user->reservations()
            ->whereDate('check_in', '<', today())
            ->orderBy('id', 'desc')
            ->paginate(5);

        return view('user.window.past', [
            'reservations' => $reservations,
            'windowTitle' => 'Past Reservations',
        ]);
    }
}
