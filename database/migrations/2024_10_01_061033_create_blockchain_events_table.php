<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blockchain_events', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_hash')->unique();
            $table->string('block_hash');
            $table->unsignedBigInteger('block_number');
            $table->timestamp('timestamp');
            $table->string('event_type'); // e.g., new block, transaction confirmation
            $table->json('event_data')->nullable(); // Optional data for the event
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blockchain_events');
    }
};
