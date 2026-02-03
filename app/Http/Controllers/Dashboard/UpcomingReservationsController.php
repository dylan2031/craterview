<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UpcomingReservationsController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $reservations = $user->reservations()
            ->whereDate('check_in', '>=', today())
            ->orderBy('id', 'desc')
            ->paginate(5);

        return view('user.window.upcoming', [
            'reservations' => $reservations,
            'windowTitle' => 'Upcoming Reservations',
        ]);
    }
}
