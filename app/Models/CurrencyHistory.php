<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static create(array $array)
 * @method static where(string $string, $from)
 */
class CurrencyHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'currency_id',
        'price',
    ];

    protected function casts()
    {
        return [
            'created_at' => 'date:Y-m-d',
        ];
    }

    public function currency(): BelongsTo
    {
        return $this->belongsTo(Currency::class);
    }
}
