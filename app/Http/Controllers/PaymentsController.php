<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Payment;
use Illuminate\Support\Facades\Auth;



class PaymentsController extends Controller
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
     * Handle the initial payment request.
     * Store form data in the session and redirect to checkout.
     */
    public function start(Request $request)
    {
        // Store universal session keys//
        // All forms that use PaymentsController must use these vars //
        // However, they are very re-usable //

        session([
            'payment.name' => $request->input('name'),
            'payment.what' => $request->input('what'),
            'payment.price' => $request->input('price'),
            'payment.message' => $request->input('message'),
        ]);

        // Redirect to checkout
        return redirect()->route('payment.checkout');
    }


    /**
     * Display the payment checkout page.
     */
    public function checkout()
    {
        return view('payment.checkout');
    }

    /**
     * Confirm the payment and update session.
     */
    public function confirm(Request $request) 
    {
        // Retrieve the payment_confirmed value from the form submission and cast it to a boolean
        $paymentConfirmed = filter_var($request->input('payment_confirmed'), FILTER_VALIDATE_BOOLEAN);

        // Store the boolean value in the session
        session(['payment_confirmed' => $paymentConfirmed]);

        if ($paymentConfirmed) {
            Payment::create([
                'name'        => session('payment.name'),
                'description' => session('payment.what'),
                'amount'      => session('payment.price'),
                'message'     => session('payment.message'),
                'user_id'     => Auth::id(), // Make sure the user is logged in
            ]);

            return redirect()->route('payment.completed')->with('message', 'Your payment was successfully processed. Thank you.');
        }
        else
        {
            //forget sessions <--- new as of 2025/07/20, if any bugs arise it's this
            session()->forget('biopay');
            session()->forget('payment_confirmed');

            // Simulate failure (NeuraChip doesn't work without a neural implant)
            return redirect()->route('payment.failed')->with('message', 'There was an error processing your payment.');
        }
    }


    public function completed()
    {
        //forget sessions
        session()->forget('biopay');
        session()->forget('payment_confirmed');

        //session()->flash('message', 'Your payment was successfully processed. Thank you.');
        return view('payment.completed');
    }

    // set biopay to true if user chooses to pay with biometrics
    public function setBiopay(Request $request)
        {
            // Set the session variable biopay to true
            session(['biopay' => true]);

            // Redirect back to the page with the form
            return redirect()->back();
        }

}