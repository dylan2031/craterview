<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ReviewRecordsController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $reviews = $user->reviews()
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('user.window.review-records', [
            'reviews' => $reviews,
            'windowTitle' => 'Your Reviews',
        ]);
    }
}
