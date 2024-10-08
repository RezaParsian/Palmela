<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

/**
 * @method static create(int[] $array)
 */
class Exchange extends Model
{
    use HasFactory;

    protected $fillable = [
        'base_currency_id',
        'target_currency_id',
        'rate',
    ];

    protected static function boot(): void
    {
        self::updated(function () {
            Cache::forget('exchangeRates');
        });

        self::created(function () {
            Cache::forget('exchangeRates');
        });

        self::deleted(function () {
            Cache::forget('exchangeRates');
        });

        parent::boot();
    }
}
