<?php
use Illuminate\Support\Facades\Route;
use Scheduling\Http\Controllers\OpenDateController;


Route::middleware(['web', 'auth'])->prefix('dashboard')->group(function () {

    Route::middleware('admin')->prefix('doctor')->group(function () {

        Route::get('open-dates/all', [OpenDateController::class, 'index'])->name('admin.open-dates.index');
        Route::get('open-dates', [OpenDateController::class, 'create'])->name('admin.open-dates.create');
        Route::post('open-dates', [OpenDateController::class, 'store'])->name('admin.open-dates.store');
    });

    Route::middleware('user')->prefix('user')->group(function () {

    });

});
