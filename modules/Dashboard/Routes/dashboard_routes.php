<?php

use Illuminate\Support\Facades\Route;
use Dashboard\Http\Controllers\admin\DashboardController as AdminDashboardController;
use Dashboard\Http\Controllers\user\DashboardController as UserDashboardController;

Route::middleware(['web, auth'])
    ->group(function () {

        Route::prefix('admin')->group(function () {
            Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard.index');
        });

        Route::prefix('panel')->group(function () {
            Route::get('/', [UserDashboardController::class, 'index'])->name('panel.index');
        });

    });

