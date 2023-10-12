<?php

use Illuminate\Support\Facades\Route;
use Dashboard\Http\Controllers\admin\DashboardController as AdminDashboardController;
use Dashboard\Http\Controllers\user\DashboardController as UserDashboardController;

Route::middleware(['web, auth'])
    ->group(function () {

        Route::middleware('admin')
            ->prefix('dashboard')
            ->group(function () {
                Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard.index');
            });

        Route::middleware('user')
            ->prefix('panel')
            ->group(function () {
                Route::get('/', [UserDashboardController::class, 'index'])->name('panel.index');
            });

    });

