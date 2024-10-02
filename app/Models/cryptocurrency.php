<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cryptocurrency extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'symbol',
        'price_usd',
        'market_cap',
    ];
}
