<?php

use Illuminate\Support\Facades\Route;
use Common\Services\Notify\Notification;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('sms/send', function () {
    resolve(Notification::class)->sendSms(User\Models\User::findOrFail(1), 'test message');
});


//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
