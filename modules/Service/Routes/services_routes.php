<?php
use Illuminate\Support\Facades\Route;

Route::group([
    'namespace'=>'Service\Http\Controllers',
    'middleware'=>'web'],function (){
    Route::get('/services','ServicesController@index')->name('services.index');
    Route::get('/services/create','ServicesController@create')->name('services.create');
    Route::post('/services','ServicesController@store')->name('services.store');
    Route::get('/services/{id}','ServicesController@show')->name('services.show');
    Route::get('/services/{id}/edit','ServicesController@show')->name('services.edit');
    Route::put('/services/{id}','ServicesController@update')->name('services.update');
    Route::delete('/services/{id}','ServicesController@destroy')->name('services.destroy');

});
