<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlockchainEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_hash',
        'block_hash',
        'block_number',
        'timestamp',
        'event_type',
        'event_data',
    ];
}
