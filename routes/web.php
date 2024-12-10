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

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::get('tickets', [DashboardController::class, 'tickets'])
    ->middleware(['auth', 'verified'])
    ->name('tickets');

Route::post('new-ticket', [DashboardController::class, 'newTicket'])
    ->middleware(['auth', 'verified'])
    ->name('newTicket');

Route::post('send-message', [DashboardController::class, 'sendMessage'])
    ->middleware(['auth', 'verified'])
    ->name('sendMessage');

Route::group(['middleware' => [\Spatie\Permission\Middleware\RoleMiddleware::using('admin')]], function () {
    Route::get('users', [DashboardController::class, 'users'])
        ->middleware(['auth', 'verified'])
        ->name('users');

    Route::post('update-user', [DashboardController::class, 'updateUser'])
        ->middleware(['auth', 'verified'])
        ->name('updateUser');
    
    Route::delete('delete-user', [DashboardController::class, 'deleteUser'])
        ->middleware(['auth', 'verified'])
        ->name('deleteUser');
});

require __DIR__ . '/auth.php';
