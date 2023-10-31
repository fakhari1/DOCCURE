<?php

use File\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;

Route::middleware('web')->group(
   function (){
    Route::get('file',[FileController::class,'index'])->name('file.index');
    Route::get('file/create',[FileController::class,'create'])->name('file.create');
    Route::get('file',[FileController::class,'new'])->name('file.new');
    Route::post('file',[FileController::class,'store'])->name('file.store');
    Route::get('file/{file}',[FileController::class,'show'])->name('file.show');
    Route::get('file/{id}/edit',[FileController::class,'edit'])->name('file.edit');
    Route::put('file/{id}',[FileController::class,'update'])->name('file.update');
    Route::get('file/delete/{file}',[FileController::class,'delete'])->name('file.delete');

});
