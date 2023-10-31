<?php

use Illuminate\Support\Facades\Route;
use Category\Http\Controllers\CategoryController;

Route::group(['middleware'=>'web'],function (){
    Route::get('/banners',[CategoryController::class,'index'])->name('banners.index');
    Route::get('/banners/create',[CategoryController::class,'create'])->name('banners.create');
    Route::post('/banners',[CategoryController::class,'store'])->name('banners.store');
    Route::get('/banners/{id}',[CategoryController::class,'show'])->name('banners.show');
    Route::get('/banners/{id}/edit',[CategoryController::class,'edit'])->name('banners.edit');
    Route::put('/banners/{id}',[CategoryController::class,'update'])->name('banners.update');
    Route::delete('/banners/{id}',[CategoryController::class,'destroy'])->name('banners.destroy');

});

