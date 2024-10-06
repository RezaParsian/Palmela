<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');
Route::view('/contact', 'contact-us')->name('contact');

Route::get('login', [AuthController::class,'index'])->name('login');
Route::post('login',[AuthController::class, 'login']);
Route::delete('logout',[AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard','as'=>'dashboard'], function () {
    Route::get('/', function (){
        return view('dashboard');
    });
});
