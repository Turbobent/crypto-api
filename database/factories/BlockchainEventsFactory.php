<?php

namespace Database\Factories;

use App\Models\BlockchainEvent;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlockchainEventFactory extends Factory
{
    protected $model = BlockchainEvent::class;

    public function definition(): array
    {
        return [
            'transaction_hash' => $this->faker->unique()->sha256,
            'block_hash' => $this->faker->unique()->sha256,
            'block_number' => $this->faker->numberBetween(1000, 999999),
            'timestamp' => now(),
            'event_type' => $this->faker->randomElement(['new block', 'transaction confirmation']),
            'event_data' => json_encode(['info' => $this->faker->sentence()]),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
