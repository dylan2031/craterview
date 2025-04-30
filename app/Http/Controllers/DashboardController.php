<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('user.dashboard');
    }
}
