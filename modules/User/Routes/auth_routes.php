<?php

use Illuminate\Support\Facades\Route;
use User\Http\Controllers\Auth\AuthController;
use User\Http\Controllers\Auth\OtpController;

Route::middleware(['web'])->group(function () {

    Route::middleware('guest')->group(function () {
        Route::get('auth', [AuthController::class, 'form'])->name('auth.show-form');

        Route::prefix('auth/code')->group(function () {

            Route::post('/', [OtpController::class, 'create'])->name('otps.send');
            Route::get('get', [OtpController::class, 'showCheck'])->name('otps.get');
            Route::post('check', [OtpController::class, 'check'])->name('otps.check');
            Route::post('retry', [OtpController::class, 'retry'])->name('otps.retry');
            Route::post('check-expired', [OtpController::class, 'checkExpired'])->name('otps.check-expired');

        });
    });

    Route::middleware('auth')->group(function () {
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    });
});
