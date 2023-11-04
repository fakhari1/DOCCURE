<?php
use Scheduling\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth'])->group(function () {
    Route::prefix('admin/appointments')->group(function () {
        Route::get('create', [AppointmentController::class, 'create'])->name('admin.appointments.create');
        Route::post('store', [AppointmentController::class, 'store'])->name('admin.appointments.store');
    });
});
