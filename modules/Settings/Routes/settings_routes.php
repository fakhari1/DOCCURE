<?php


use Illuminate\Support\Facades\Route;


use Settings\Http\Controllers\GeneralSettingsController;

Route::middleware(['web', 'auth'])
    ->group(function () {


        Route::middleware('admin')
            ->prefix('admin')
            ->group(function () {
                Route::get('settings/general', [GeneralSettingsController::class, 'create'])->name('admin.settings.general.index');
                Route::post('settings/general/create', [GeneralSettingsController::class, 'store'])->name('admin.settings.general.store');
            });


    });
