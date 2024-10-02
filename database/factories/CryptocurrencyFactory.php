<?php

namespace Database\Factories;

use App\Models\Cryptocurrency;
use Illuminate\Database\Eloquent\Factories\Factory;

class CryptocurrencyFactory extends Factory
{
    protected $model = Cryptocurrency::class;

    public function definition(): array
    {
            // Extended list of cryptocurrency names
            $name = $this->faker->randomElement([
                'Bitcoin', 'Ethereum', 'Litecoin', 'Ripple',
                'Cardano', 'Polkadot', 'Chainlink', 'Stellar',
                'Dogecoin', 'Uniswap', 'Solana', 'Binance Coin',
                'Tether', 'Monero', 'Tezos', 'Avalanche'
            ]);

            // Assign symbol based on cryptocurrency name
            $symbol = match ($name) {
                'Bitcoin' => 'BTC',
                'Ethereum' => 'ETH',
                'Litecoin' => 'LTC',
                'Ripple' => 'XRP',
                'Cardano' => 'ADA',
                'Polkadot' => 'DOT',
                'Chainlink' => 'LINK',
                'Stellar' => 'XLM',
                'Dogecoin' => 'DOGE',
                'Uniswap' => 'UNI',
                'Solana' => 'SOL',
                'Binance Coin' => 'BNB',
                'Tether' => 'USDT',
                'Monero' => 'XMR',
                'Tezos' => 'XTZ',
                'Avalanche' => 'AVAX',
                default => ''
            };

        return [
            'name' => $name,
            'symbol' => $symbol,
            'price_usd' => $this->faker->randomFloat(8, 1000, 50000),
            'market_cap' => $this->faker->randomFloat(8, 100000000, 1000000000), // Random market cap
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
    public function createUniqueCryptocurrency()
    {
        $data = $this->definition();

        // Use firstOrCreate to avoid duplicates
        return Cryptocurrency::firstOrCreate(
            ['name' => $data['name']], // Check for uniqueness by 'name'
            $data // Insert data if not found
        );
    }
}
