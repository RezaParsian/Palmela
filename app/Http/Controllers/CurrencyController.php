<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCurrencyRequest;
use App\Http\Requests\UpdateExchangeRequest;
use App\Models\Currency;
use App\Models\CurrencyHistory;
use App\Models\Exchange;
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

    public function exchangeIndex(): View|Factory|Application
    {
        $exchanges = Exchange::with('to','from')
            ->orderBy('id', 'desc')
            ->paginate();

        return view('dashboard.currency.exchange', compact('exchanges'));
    }

    public function updateExchange(UpdateExchangeRequest $request, Exchange $exchange): RedirectResponse
    {
        $exchange->update($request->validated());
        return back()->with('msg', 'exchange rate has been updated');
    }
}
