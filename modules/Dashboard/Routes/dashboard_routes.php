<?php

use Illuminate\Support\Facades\Route;
use Dashboard\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use Dashboard\Http\Controllers\User\DashboardController as UserDashboardController;
use Settings\Http\Controllers\GeneralSettingsController;

Route::middleware(['web', 'auth'])
    ->group(function () {

        Route::middleware('admin')
            ->prefix('admin')
            ->group(function () {
                Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.index');
            });

        Route::middleware('user')
            ->prefix('panel')
            ->group(function () {
                Route::get('/', [UserDashboardController::class, 'index'])->name('panel.index');
            });

    });
