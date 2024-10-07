<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
