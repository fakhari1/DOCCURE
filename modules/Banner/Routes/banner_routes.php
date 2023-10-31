<?php

use Illuminate\Support\Facades\Route;

Route::group(["namespace"=>"Banner\Http\Controllers",'middleware'=>'web'],function (){
    Route::get('/banners','CategoryController@index')->name('banners.index');
    Route::get('/banners/create','BannerController@create')->name('banners.create');
    Route::post('/banners','BannerController@store')->name('banners.store');
    Route::get('/banners/{id}','BannerController@show')->name('banners.show');
    Route::get('/banners/{id}/edit','BannerController@show')->name('banners.edit');
    Route::put('/banners/{id}','BannerController@update')->name('banners.update');
    Route::delete('/banners/{id}','BannerController@destroy')->name('banners.destroy');

});

