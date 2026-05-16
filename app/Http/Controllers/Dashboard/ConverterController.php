<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ConverterController extends Controller
{
    public function index() {
        return view('user.perks.converter.app', [
            'windowTitle' => 'Currency Converter',
        ]);
    }

    public function additional() {
        return view('user.perks.converter.app2', [
            'windowTitle' => 'Currency Converter',
        ]);
    }
}
