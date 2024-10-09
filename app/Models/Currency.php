<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

/**
 * @method static create(array $array)
 * @method static orderBy(string $string, string $string1)
 * @method static find($from)
 * @property mixed $price
 * @property mixed $id
 */
class Currency extends Model
{
    use HasFactory;

    protected $fillable = [
        'symbol',
        'name',
        'price',
    ];

    protected static function boot(): void
    {
        self::updated(function () {
            Cache::forget('currencies');
        });

        self::deleted(function () {
            Cache::forget('currencies');
        });

        self::created(function () {
            Cache::forget('currencies');
        });

        parent::boot();
    }
}
