<?php
use Illuminate\Support\Facades\Route;
use Scheduling\Http\Controllers\AppointmentDayController;

Route::middleware(['web', 'auth'])->group(function () {

    Route::prefix('admin/appointment-days')->group(function () {
        Route::get('create', [AppointmentDayController::class, 'create'])->name('admin.appointment-days.create');
        Route::post('create', [AppointmentDayController::class, 'store'])->name('admin.appointment-days.store');
    });

});
