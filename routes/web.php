<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CurrencyController;
use App\Models\Currency;
use App\Models\Exchange;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $dataCurrency = Cache::rememberForever('dataCurrency', function () {
        return __('currency');
    });

    $currencies = Cache::rememberForever('currencies', function () {
        return Currency::all();
    });

    $exchangeRates = Cache::rememberForever('exchangeRates', function () {
        return Exchange::all();
    });

    return view('index', compact('dataCurrency', 'currencies', 'exchangeRates'));
})->name('home');

Route::view('/contact', 'contact-us')->name('contact');

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::delete('logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard'], function () {
    Route::get('currencies', [CurrencyController::class, 'index'])->name('currencies.index');
    Route::put('currencies/{currency}', [CurrencyController::class, 'update'])->name('currencies.update');
});
