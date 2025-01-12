<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\QuizResult;
use Illuminate\Http\Request;

class QuizResultController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'responses' => 'required|array',
            'results' => 'required|array',
        ]);

        $quizResult = QuizResult::create([
            'answers' => $request->responses,
            'results' => $request->results,
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        return response()->json('', 201);
    }
}
