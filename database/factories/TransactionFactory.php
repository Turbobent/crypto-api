<?php

namespace Database\Factories;

use App\Models\Transaction;
use App\Models\Wallet;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    protected $model = Transaction::class;

    public function definition(): array
    {
        $transaction_type = $this->faker->randomElement(['deposit', 'withdrawal']);
        $currency =  $this->faker->randomElement(['BTC', 'ETH', 'LTC', 'XRP']);
        $status = $this->faker->randomElement(['pending', 'confirmed', 'failed']);

        return [
            'user_id' => User::factory(), // Associate with a user
            'wallet_id' => Wallet::factory(), // Associate with a wallet
            'transaction_type' => $transaction_type,
            'amount' => $this->faker->randomFloat(8, 0.01, 5), // Random amount
            'currency' => $currency,
            'transaction_hash' => $this->faker->unique()->sha256, // Using SHA256 for transaction hash
            'status' => $status,
            'confirmed_at' => $this->faker->optional()->dateTime(), // Sometimes confirmed
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

