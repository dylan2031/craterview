<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentsController extends Controller
{
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
            'payment.quantity' => $request->input('quantity'),
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
    public function confirm()
    {
        session()->forget('payment');
        
        return view('payment.confirm');
    }

}