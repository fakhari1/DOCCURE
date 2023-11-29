<?php

use Illuminate\Support\Facades\Route;
use User\Http\Controllers\Auth\AuthController;
use User\Http\Controllers\Auth\OtpController;

Route::middleware(['web'])
    ->group(function () {
        Route::get('login', [AuthController::class, 'showLogin'])->name('login');


        Route::prefix('login/code')->group(function () {

            Route::post('/', [OtpController::class, 'create'])->name('otps.send');
            Route::get('get', [OtpController::class, 'showCheck'])->name('otps.get');
            Route::post('check', [OtpController::class, 'check'])->name('otps.check');
            Route::get('retry', [OtpController::class, 'retry'])->name('otps.retry');

        });



        Route::middleware('auth')->group(function () {
            Route::post('logout', [AuthController::class, 'logout'])->name('logout');
        });
    });
