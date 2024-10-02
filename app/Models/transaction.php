<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'wallet_id',
        'transaction_type',
        'amount',
        'currency',
        'transaction_hash',
        'status',
        'confirmed_at',
    ];

    public function wallet()
    {
        return $this->belongsTo(Wallet::class);
    }
}
