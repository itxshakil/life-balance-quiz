<?php

use App\Http\Controllers\Api\QuizResultController;
use Illuminate\Support\Facades\Route;

Route::post('/quiz-results', [QuizResultController::class, 'store']);