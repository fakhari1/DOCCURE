<?php

use Illuminate\Support\Facades\Route;
use User\Http\Controllers\Auth\AuthController;
use User\Http\Controllers\Auth\OtpController;

Route::middleware(['web', 'guest'])
    ->group(function () {
        Route::get('login', [AuthController::class, 'showLogin'])->name('login.show');
        Route::post('login', [AuthController::class, 'login'])->name('login');

        Route::post('otps/send', [OtpController::class, 'send'])->name('otp.send');
        Route::post('otps/get', [OtpController::class, 'get'])->name('otp.get');
//        Route::post('logout', [AuthController::class, 'logout']);
//        Auth::routes();
    });

Route::middleware(['web', 'auth'])
    ->group(function () {
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    });

