<?php
use Illuminate\Support\Facades\Route;

Route::group([
    'namespace'=>'File\Http\Controllers',
    'middleware'=>'web'],function (){
    Route::get('/files','FileController@index')->name('files.index');
    Route::get('/files/create','FileController@create')->name('files.create');
    Route::post('/files','FileController@store')->name('files.store');
    Route::get('/files/{id}','FileController@show')->name('files.show');
    Route::get('/files/{id}/edit','FileController@show')->name('files.edit');
    Route::put('/files/{id}','FileController@update')->name('files.update');
    Route::delete('/files/{id}','FileController@destroy')->name('files.destroy');

});
