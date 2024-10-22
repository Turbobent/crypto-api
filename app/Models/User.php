<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';


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
