<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencySeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Currency::create([
            'symbol' => 'AUD',
            'name' => 'Australian Dollar',
            'price' => 28493.93,
        ]);

        Currency::create([
            'symbol' => 'IRR',
            'name' => 'Iranian Rial',
            'price' => 1,
        ]);
    }
}
