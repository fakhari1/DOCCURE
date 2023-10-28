<?php

use Illuminate\Support\Facades\Route;
use User\Http\Controllers\Auth\AuthController;

Route::namespace('User\Http\Controllers\Auth')
    ->middleware(['web', 'guest'])
    ->group(function () {

        Route::get('login', [AuthController::class, 'showLogin'])->name('login.show');
        Route::post('login', [AuthController::class, 'login'])->name('login');

        Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    });

