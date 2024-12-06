<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')
    ->name('index');

Route::view('about', 'about')
    ->name('about');

Route::view('portfolio', 'portfolio')
    ->name('portfolio');

Route::view('services', 'services')
    ->name('services');

Route::view('privacy-policy', 'privacy-policy')
    ->name('privacy-policy');

Route::view('terms-of-service', 'terms-of-service')
    ->name('terms-of-service');

Route::view('cookie-policy', 'cookie-policy')
    ->name('cookie-policy');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


Route::get('dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('tickets', [DashboardController::class, 'tickets'])
    ->middleware(['auth', 'verified'])
    ->name('tickets');

Route::get('users', [DashboardController::class, 'users'])
    ->middleware(['auth', 'verified'])
    ->name('users');

require __DIR__ . '/auth.php';
