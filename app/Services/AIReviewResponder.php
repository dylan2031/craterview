<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

use App\Models\Review;

class AIReviewResponder
{
    /**
     * Generate a response to a review
     *
     * @param Review $review
     * @return string
     */
    public function generateResponse(Review $review): string
    {

        $prompt = file_get_contents(storage_path('app/reviewresponsebot3000.txt'));

        $userReview = "The guest has left a {$review->star_rating} review entitled {$review->title} and says '{$review->body}'. Respond to it.";

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                [
                    'role' => 'system',
                    'content' => $prompt
                ],
                [
                    'role' => 'user',
                    'content' => $userReview
                ]
            ],
            'temperature' => 0.5,
            'max_tokens' => 200
        ]);

        $reply = $response->json('choices.0.message.content');

        return $reply ?? "Unfortunately, I cannot generate a response.";

    }
}