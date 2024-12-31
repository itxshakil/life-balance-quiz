<?php

use App\Http\Controllers\Api\QuizResultController;
use Illuminate\Routing\Route;

Route::post('/quiz-results', [QuizResultController::class, 'store']);