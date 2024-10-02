<?php

namespace Database\Factories;

use App\Models\Cryptocurrency;
use Illuminate\Database\Eloquent\Factories\Factory;

class CryptocurrencyFactory extends Factory
{
    protected $model = Cryptocurrency::class;

    public function definition(): array
    {
        $name = $this->faker->randomElement(['Bitcoin', 'Ethereum', 'Litecoin', 'Ripple']);
        $symbol = $this->faker->randomElement(['BTC', 'ETH', 'LTC', 'XRP']);
        
        return [
            'name' => $name,
            'symbol' => $symbol,
            'price_usd' => $this->faker->randomFloat(8, 1000, 50000),
            'market_cap' => $this->faker->randomFloat(8, 100000000, 1000000000), // Random market cap
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
