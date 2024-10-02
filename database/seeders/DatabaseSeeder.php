<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cryptocurrency;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Wallet::factory(10)->create();
        \App\Models\Transaction::factory(20)->create();
        
        for ($i = 0; $i < 10; $i++) {
            Cryptocurrency::factory()->createUniqueCryptocurrency();
        }

        \App\Models\ExchangeRate::factory(10)->create();
        \App\Models\PaymentRequest::factory(10)->create();
        \App\Models\BlockchainEvent::factory(10)->create();
    }
}

