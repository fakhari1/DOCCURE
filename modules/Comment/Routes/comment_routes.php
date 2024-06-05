<?php
use Illuminate\Support\Facades\Route;
use Comment\Http\Controllers\DoctorCommentController;
use Comment\Http\Controllers\UserCommentController;

Route::middleware(['web', 'auth'])
    ->prefix('dashboard')
    ->group(function () {

        Route::middleware(['admin'])
            ->prefix('doctor')
            ->group(function () {
                Route::get('comments', [DoctorCommentController::class, 'index'])->name('admin.comments.index');
                Route::post('comments', [DoctorCommentController::class, 'store'])->name('admin.comments.store');
                Route::get('comments/{comment}/create', [DoctorCommentController::class, 'create'])->name('admin.comments.create');
                Route::patch('comments/{comment}', [DoctorCommentController::class, 'update'])->name('admin.comments.update');
                Route::delete('comments/{comment}', [DoctorCommentController::class, 'destroy'])->name('admin.comments.delete');
            });

        Route::middleware(['user'])
            ->prefix('user')
            ->group(function () {
                Route::get('comments', [UserCommentController::class, 'index'])->name('user.comments.index');
                Route::post('comments', [UserCommentController::class, 'store'])->name('user.comments.store');
                Route::get('comments/{comment}/create', [UserCommentController::class, 'create'])->name('user.comments.create');
                Route::patch('comments/{comment}', [UserCommentController::class, 'update'])->name('user.comments.update');
                Route::delete('comments/{comment}', [UserCommentController::class, 'destroy'])->name('user.comments.delete');
            });

    });
