<?php

use Illuminate\Support\Facades\Route;
use Dashboard\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use Dashboard\Http\Controllers\User\DashboardController as UserDashboardController;
use Settings\Http\Controllers\GeneralSettingsController;

Route::middleware(['web', 'auth'])
    ->prefix('dashboard')
    ->group(function () {

        Route::middleware('admin')
            ->prefix('doctor')
            ->group(function () {
                Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard.admin.index');

            });

        Route::middleware('user')
            ->prefix('user')
            ->group(function () {
                Route::get('/', [UserDashboardController::class, 'index'])->name('dashboard.user.index');
            });

    });
