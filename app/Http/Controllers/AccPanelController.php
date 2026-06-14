<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccPanelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('user.account.acc-panel', [
            'windowTitle' => 'Account Panel',
        ]);
    }
}