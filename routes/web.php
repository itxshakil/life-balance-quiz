<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('home');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::inertia('/privacy-policy', 'PrivacyPolicy')->name('privacy-policy');

Route::inertia('/blogs', 'Blogs/Index')->name('blogs.index');
Route::inertia('/blogs/mental-health-tips', 'Blogs/MentalHealthTips')->name('blogs.mental-health-tips');
Route::inertia('/blogs/personal-growth-hacks', 'Blogs/PersonalGrowthHack')->name('blogs.personal-growth-hacks');
Route::inertia('/blogs/boost-your-career-strategies', 'Blogs/CareerBoostStrategies')->name('blogs.boost-your-career-strategies');
Route::inertia('/blogs/mind-body-connection-steps-to-health', 'Blogs/MindBodyConnection')->name('blogs.mind-body-connection');
Route::inertia('/blogs/financial-freedom-tips', 'Blogs/FinancialFreedomTips')->name('blogs.financial-freedom-tips');
Route::inertia('/blogs/building-stronger-relationships', 'Blogs/BuildStrongRelationships')->name('blogs.stronger-relationships');
Route::inertia('/blogs/finding-your-life-purpose', 'Blogs/FindLifePurpose')->name('blogs.find-life-purpose');
Route::inertia('/blogs/create-lasting-happiness', 'Blogs/CreateLastingHappiness')->name('blogs.create-lasting-happiness');
Route::inertia('/blogs/how-to-stay-fit-and-healthy', 'Blogs/StayFitHealthy')->name('blogs.stay-fit-healthy');
Route::inertia('/blogs/work-life-balance-tips', 'Blogs/WorkLifeBalance')->name('blogs.work-life-balance');
Route::inertia('/blogs/achieving-spiritual-well-being', 'Blogs/AchievingSpiritualWellBeing')->name('blogs.spiritual-well-being');
Route::inertia('/blogs/how-to-build-a-morning-routine-for-success', 'Blogs/MorningRoutineGuide')->name('blogs.morning-routine');
Route::inertia('/blogs/how-to-manage-stress', 'Blogs/ManageStress')->name('blogs.manage-stress');
Route::inertia('/blogs/how-to-build-confidence', 'Blogs/BuildConfidence')->name('blogs.build-confidence');
Route::inertia('/blogs/how-to-cultivate-a-growth-mindset', 'Blogs/BuildGrowthMindset')->name('blogs.growth-mindset');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
