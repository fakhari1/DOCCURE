<?php
use Illuminate\Support\Facades\Route;
use Uploader\Http\Controllers\UploaderController;

Route::middleware(['web', 'auth'])->group(function (){
    Route::get('uploader',[UploaderController::class,'index'])->name('uploader.index');
    Route::get('uploader/create',[UploaderController::class,'create'])->name('uploader.create');
    Route::post('uploader',[UploaderController::class,'store'])->name('uploader.store');
    Route::get('uploader/{id}',[UploaderController::class,'show'])->name('uploader.show');
    Route::get('uploader/{id}/edit',[UploaderController::class,'edit'])->name('uploader.edit');
    Route::put('uploader/{id}',[UploaderController::class,'update'])->name('uploader.update');
    Route::delete('uploader/{id}',[UploaderController::class,'destroy'])->name('uploader.destroy');

});
