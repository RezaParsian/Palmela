<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Cache;

/**
 * @method static create(int[] $array)
 * @method static orderBy(string $string, string $string1)
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

    public function from(): BelongsTo
    {
        return $this->belongsTo(Currency::class, 'base_currency_id');
    }

    public function to(): BelongsTo
    {
        return $this->belongsTo(Currency::class, 'target_currency_id');
    }
}
