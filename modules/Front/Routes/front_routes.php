<?php


use Illuminate\Support\Facades\Route;
use Front\Http\Controllers\HomeController;

Route::group([
    'middleware'=>'web'],function (){

    Route::get('/', [HomeController::class, 'index'])->name('home.index');

});

