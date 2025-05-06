<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Review;
use App\Models\Payment; 
use Carbon\Carbon; // Make sure to import Carbon

// HomeController was made by laravel auth, not me
// I modified the view that is returned but that's it

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user(); // cleaner than fetching by ID

        // Get upcoming reservations (check_in >= today)
        $upcomingReservations = $user->reservations()
            ->whereDate('check_in', '>=', Carbon::today())
            ->orderBy('check_in', 'asc')
            ->get();

        // Get past reservations (check_out < today)
        $pastReservations = $user->reservations()
            ->whereDate('check_out', '<', Carbon::today())
            ->orderBy('check_out', 'desc')
            ->get();

        // Fetch the payments history
        $payments = $user->payments;

        return view('user.dashboard', [
            'reviews' => $user->reviews,
            'upcomingReservations' => $upcomingReservations, // Pass upcoming reservations
            'pastReservations' => $pastReservations, // Pass past reservations
            'payments' => $payments, // Pass payments
        ]);
    }
}
