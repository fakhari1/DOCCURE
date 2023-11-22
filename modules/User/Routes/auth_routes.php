<?php

use Illuminate\Support\Facades\Route;
use User\Http\Controllers\Auth\AuthController;
use User\Http\Controllers\Auth\OtpController;

Route::middleware(['web', 'guest'])
    ->group(function () {
        Route::get('login', [AuthController::class, 'showLogin'])->name('login.show');
        Route::post('login', [AuthController::class, 'login'])->name('login');

        Route::post('login/code', [OtpController::class, 'create'])->name('otps.send');
        Route::get('login/code/get', [OtpController::class, 'showCheck'])->name('otps.get');
        Route::post('login/code/check', [OtpController::class, 'check'])->name('otps.check');
        Route::get('login/code/retry', [OtpController::class, 'retry'])->name('otps.retry');
//        Route::post('logout', [AuthController::class, 'logout']);
//        Auth::routes();
    });

Route::middleware(['web', 'auth'])
    ->group(function () {
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    });

