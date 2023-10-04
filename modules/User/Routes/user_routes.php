<?php
use Illuminate\Support\Facades\Route;

Route::group([
    'namespace'=>'User\Http\Controllers',
    'middleware'=>'web'],function (){
    Route::get('/users','UserController@index')->name('users.index');
    Route::get('/users/create','UserController@create')->name('users.create');
    Route::post('/users','UserController@store')->name('users.store');
    Route::get('/users/{id}','UserController@show')->name('users.show');
    Route::get('/users/{id}/edit','UserController@show')->name('users.edit');
    Route::put('/users/{id}','UserController@update')->name('users.update');
    Route::delete('/users/{id}','UserController@destroy')->name('users.destroy');

});
