<?php

namespace Database\Factories;

use App\Models\ExchangeRate;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExchangeRateFactory extends Factory
{
    protected $model = ExchangeRate::class;

    public function definition(): array
    {
        $currency_from = $this->faker->randomElement(['BTC', 'ETH', 'LTC', 'XRP']);

        return [
            'currency_from' => $currency_from,
            'currency_to' => 'USD', // Assuming conversion to USD
            'rate' => $this->faker->randomFloat(8, 0.01, 10000), // Random exchange rate
            'timestamp' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
