<?php

use Illuminate\Support\Facades\Route;
use User\Http\Controllers\Auth\AuthController;
use User\Http\Controllers\Auth\OtpController;

Route::middleware(['web'])->group(function () {

    Route::middleware('guest')->group(function () {
        Route::get('auth', [AuthController::class, 'showForm'])->name('auth.show-form');
        Route::post('auth', [AuthController::class, 'login'])->name('auth.login');

        Route::prefix('auth/code')->group(function () {
            Route::post('/', [AuthController::class, 'storeOtp'])->name('auth.otp.store');
            Route::get('get', [AuthController::class, 'getOtp'])->name('auth.otp.get');
            Route::post('retry', [AuthController::class, 'retryOtp'])->name('auth.otp.retry');
            Route::post('check-expired', [AuthController::class, 'checkExpiredOtp'])->name('otps.check-expired');
        });
    });

    Route::middleware('auth')->group(function () {
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    });
});
