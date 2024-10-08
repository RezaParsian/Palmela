<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCurrencyRequest;
use App\Models\Currency;
use App\Models\CurrencyHistory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;

class CurrencyController extends Controller
{
    public function index(): View|Factory|Application
    {
        $currencies = Currency::orderBy('id', 'desc')->paginate();

        return view('dashboard.currency.index', compact('currencies'));
    }

    public function update(UpdateCurrencyRequest $request, Currency $currency): RedirectResponse
    {
        CurrencyHistory::create([
            'currency_id'=>$currency->id,
            'price'=>$currency->price,
        ]);

        $currency->update($request->validated());

        return back()->with('msg', 'currency has been updated');
    }
}
