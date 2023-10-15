<?php

use Illuminate\Support\Facades\Route;
use Dashboard\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use Dashboard\Http\Controllers\User\DashboardController as UserDashboardController;
use Settings\Http\Controllers\SettingsController;

Route::namespace('Dashboard\Http\Controllers\Admin')
    ->middleware(['web', 'auth'])
    ->group(function () {

        Route::middleware('admin')
            ->prefix('dashboard')
            ->group(function () {
                Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard.index');
                Route::get('settings', [SettingsController::class, 'index'])->name('dashboard.settings.index');
            });


    });

Route::namespace('Dashboard\Http\Controllers\User')
    ->middleware(['web', 'auth'])
    ->group(function () {

        Route::middleware('user')
            ->prefix('panel')
            ->group(function () {
                Route::get('/', [UserDashboardController::class, 'index'])->name('panel.index');
            });

    });


