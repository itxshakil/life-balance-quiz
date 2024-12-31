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
            'answers' => 'required|array',
            'results' => 'required|array',
        ]);

        $quizResult = QuizResult::create([
            'answers' => $request->answers,
            'results' => $request->results,
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        return response()->json('', 201);
    }
}
