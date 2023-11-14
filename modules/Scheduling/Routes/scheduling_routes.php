<?php
use Illuminate\Support\Facades\Route;
use Scheduling\Http\Controllers\OpenTimeController;


Route::middleware(['web', 'auth'])->prefix('dashboard')->group(function () {

    Route::middleware('admin')->prefix('doctor')->group(function () {

        Route::get('open-times/all', [OpenTimeController::class, 'index'])->name('admin.open-times.index');
        Route::get('open-times', [OpenTimeController::class, 'create'])->name('admin.open-times.create');
        Route::post('open-times', [OpenTimeController::class, 'store'])->name('admin.open-times.store');
    });

    Route::middleware('user')->prefix('user')->group(function () {

    });

});
