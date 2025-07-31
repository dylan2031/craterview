<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BlimbyController extends Controller
{
    public function chat(Request $request)
    {
        // Validate the incoming message
        $request->validate([
            'message' => 'required|string|max:500',
        ]);

        $userMessage = $request->input('message');

        // For now, return a simple static reply
        return response()->json([
            'reply' => "Greetings, Earthling! I'm Blimby and I received your message: \"$userMessage\"",
        ]);
    }
}
