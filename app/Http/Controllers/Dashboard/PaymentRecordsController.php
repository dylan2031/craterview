<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PaymentRecordsController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $payments = $user->payments()
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('user.window.payment-records', [
            'payments' => $payments,
            'windowTitle' => 'Transaction Records',
        ]);
    }
}
