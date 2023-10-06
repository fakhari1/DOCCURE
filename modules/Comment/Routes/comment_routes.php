<?php
use Illuminate\Support\Facades\Route;

Route::group([
    'namespace'=>'Comment\Http\Controllers',
    'middleware'=>'web'],function (){
    Route::get('/comments','CommentController@index')->name('comments.index');
    Route::get('/comments/create','CommentController@create')->name('comments.create');
    Route::post('/comments','CommentController@store')->name('comments.store');
    Route::get('/comments/{id}','CommentController@show')->name('comments.show');
    Route::get('/comments/{id}/edit','CommentController@show')->name('comments.edit');
    Route::put('/comments/{id}','CommentController@update')->name('comments.update');
    Route::delete('/comments/{id}','CommentController@destroy')->name('comments.destroy');

});
