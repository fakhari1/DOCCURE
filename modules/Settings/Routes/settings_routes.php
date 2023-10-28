<?php


use Illuminate\Support\Facades\Route;


use Settings\Http\Controllers\GeneralSettingsController;

Route::namespace('Settings\Http\Controllers')
    ->middleware(['web', 'auth'])
    ->group(function () {

        Route::middleware('admin')
            ->prefix('admin')
            ->group(function () {

                Route::post('settings/general/create', [GeneralSettingsController::class, 'store'])->name('admin.settings.general.store');

            });


    });
