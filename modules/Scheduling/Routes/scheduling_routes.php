<?php
use Illuminate\Support\Facades\Route;
use Scheduling\Http\Controllers\OpenDateController;
use Scheduling\Http\Controllers\OpenTimeController;

Route::middleware(['web', 'auth'])->prefix('dashboard')->group(function () {

    Route::middleware('admin')->prefix('doctor')->group(function () {

        Route::get('open-dates/all', [OpenDateController::class, 'index'])->name('admin.open-dates.index');
        Route::get('open-dates', [OpenDateController::class, 'create'])->name('admin.open-dates.create');
        Route::post('open-dates', [OpenDateController::class, 'store'])->name('admin.open-dates.store');
        Route::get('open-dates/{date}/edit', [OpenDateController::class, 'edit'])->name('admin.open-dates.edit');
        Route::patch('open-dates/{date}', [OpenDateController::class, 'update'])->name('admin.open-dates.update');


        Route::get('open-dates/{date}/times/all', [OpenTimeController::class, 'index'])->name('admin.open-dates.times.index');
        Route::post('open-dates/times/{time}/update-status', [OpenTimeController::class, 'updateStatus'])->name('admin.open-dates.times.update_status');
    });

    Route::middleware('user')->prefix('user')->group(function () {

    });

});
