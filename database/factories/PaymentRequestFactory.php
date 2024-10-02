<?php

namespace Database\Factories;

use App\Models\PaymentRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentRequestFactory extends Factory
{
    protected $model = PaymentRequest::class;

    public function definition(): array
    {
        $currency = $this->faker->randomElement(['BTC', 'ETH', 'LTC', 'XRP']);
        $status = $this->faker->randomElement(['pending', 'complete', 'canceled']);

        return [
            'user_id' => User::factory(),
            'recipient_address' => $this->faker->unique()->sha256,
            'amount' => $this->faker->randomFloat(8, 0.01, 10), // Random amount between 0.01 and 10
            'currency' => $currency,
            'status' => $status,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
