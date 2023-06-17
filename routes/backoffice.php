<?php

use App\Http\Controllers\Backoffice\BookingController;
use App\Http\Controllers\Backoffice\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('backoffice')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index']);
        Route::resource('/booking', BookingController::class);
    });
    require __DIR__ . '/auth.php';
});
