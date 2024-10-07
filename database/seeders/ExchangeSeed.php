<?php

namespace Database\Seeders;

use App\Models\Exchange;
use Illuminate\Database\Seeder;

class ExchangeSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Exchange::create([
            'base_currency_id' => 1,
            'target_currency_id' => 2,
            'rate' => 1,
        ]);

        Exchange::create([
            'base_currency_id' => 2,
            'target_currency_id' => 1,
            'rate' => 1.2,
        ]);
    }
}
