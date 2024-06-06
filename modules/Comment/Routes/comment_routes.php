<?php

use Illuminate\Support\Facades\Route;
use Comment\Http\Controllers\DoctorCommentController;
use Comment\Http\Controllers\UserCommentController;

Route::middleware(['web', 'auth', 'admin', 'admin.has_completed_profile'])
    ->prefix('dashboard/doctor/comments')
    ->group(function () {
        Route::get('/', [DoctorCommentController::class, 'index'])->name('admin.comments.index');
        Route::post('/', [DoctorCommentController::class, 'store'])->name('admin.comments.store');
        Route::get('{comment}/answer', [DoctorCommentController::class, 'create'])->name('admin.comments.create');
        Route::patch('{comment}', [DoctorCommentController::class, 'update'])->name('admin.comments.update');
        Route::delete('{comment}', [DoctorCommentController::class, 'destroy'])->name('admin.comments.delete');
    });

Route::middleware(['web', 'auth', 'user', 'user.has_completed_profile'])
    ->prefix('dashboard/user/comments')
    ->group(function () {
        Route::get('/', [UserCommentController::class, 'index'])->name('user.comments.index');
        Route::post('/', [UserCommentController::class, 'store'])->name('user.comments.store');
        Route::get('create', [UserCommentController::class, 'create'])->name('user.comments.create');
        Route::get('{comment}', [UserCommentController::class, 'show'])->name('user.comments.show');
        Route::patch('{comment}', [UserCommentController::class, 'update'])->name('user.comments.update');
        Route::delete('{comment}', [UserCommentController::class, 'destroy'])->name('user.comments.delete');
    });
