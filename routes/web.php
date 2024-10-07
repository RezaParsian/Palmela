<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CurrencyController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');
Route::view('/contact', 'contact-us')->name('contact');

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::delete('logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard'], function () {
    Route::get('currencies', [CurrencyController::class, 'index'])->name('currencies.index');
    Route::put('currencies/{currency}', [CurrencyController::class, 'update'])->name('currencies.update');
});
