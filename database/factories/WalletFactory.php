<?php

namespace Database\Factories;

use App\Models\Wallet;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class WalletFactory extends Factory
{
    protected $model = Wallet::class;

    public function definition(): array
    {
        $currency = $this->faker->randomElement(['BTC', 'ETH', 'LTC', 'XRP']);

        return [
            'user_id' => User::factory(), // Creates a user for the wallet
            'address' => $this->faker->unique()->sha256, // Generates a unique SHA256 address
            'currency' => $currency,
            'balance' => $this->faker->randomFloat(8, 0, 10), // Random balance between 0 and 10
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
