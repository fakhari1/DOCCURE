<?php


use Illuminate\Support\Facades\Route;
use Front\Http\Controllers\HomeController;

Route::middleware(['web'])->group(function (){

    Route::get('/', [HomeController::class, 'index'])->name('home');

});

