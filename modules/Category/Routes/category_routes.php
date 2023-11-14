<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'namespace' => 'Category\Http\Controllers',
    'middleware' => 'web'], function () {
    Route::get('/categories', 'CategoryController@index')->name('categories.index');
    Route::get('/categories/create', 'CategoryController@create')->name('categories.create');
    Route::post('/categories', 'CategoryController@store')->name('categories.store');
    Route::get('/categories/{id}', 'CategoryController@show')->name('categories.show');
    Route::get('/categories/{id}/edit', 'CategoryController@show')->name('categories.edit');
    Route::put('/categories/{id}', 'CategoryController@update')->name('categories.update');
    Route::delete('/categories/{id}', 'CategoryController@destroy')->name('categories.destroy');

});
