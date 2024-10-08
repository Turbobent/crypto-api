<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class user extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password',
    ];

    public function wallets()
    {
        return $this->hasMany(Wallet::class);
    }

    public function paymentRequests()
    {
        return $this->hasMany(PaymentRequest::class);
    }

     public function transactions()
     {
         return $this->hasMany(Transaction::class);
     }
}
