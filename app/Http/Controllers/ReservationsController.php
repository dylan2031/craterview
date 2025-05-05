<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon;

class ReservationsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function create()
    {
        return view('reservations.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'room_type' => 'required|string|in:pod,single,twin,double,penthouse',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after:check_in',
            'special_request' => 'nullable|string|max:1000',
        ]);

        // Calculate nights
        $checkIn = Carbon\Carbon::parse($validated['check_in']);
        $checkOut = Carbon\Carbon::parse($validated['check_out']);
        $nights = $checkIn->diffInDays($checkOut);

        // Determine price per night
        $prices = [
            'pod' => 32.10,
            'single' => 80.00,
            'twin' => 100.00,
            'double' => 120.00,
            'penthouse' => 369.99,
        ];

        $pricePerNight = $prices[$validated['room_type']] ?? 0;
        $totalPrice = $nights * $pricePerNight;

        // Add the user_id to the validated data
        $validated['user_id'] = auth()->id();
        $validated['nights'] = $nights;
        $validated['price_per_night'] = $pricePerNight;
        $validated['total_price'] = $totalPrice;

        // Create reservation in DB
        $reservation = \App\Models\Reservation::create($validated);

        // Go to dashboard (for now)
        return redirect()->route('reservations.confirmation', ['id' => $reservation->id])->with('message', 'Reservation confirmed! See you soon!');

    }

    public function confirmation($id)
    {
        $reservation = auth()->user()->reservations()->findOrFail($id);

        return view('reservations.confirmation', compact('reservation'));
    }

    public function destroy($id)
    {
        $reservation = auth()->user()->reservations()->findOrFail($id);

        // If post does not belong to user, return 403
        if (auth()->user()->id !== $reservation->user_id) {
            abort(403);
        }

        $reservation->delete();

        return redirect()->route('dashboard')->with('message', 'Your reservation was cancelled and processed in accordance with our no refunds policy.');
    }

}
