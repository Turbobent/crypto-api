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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Add this line
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Foreign key constraint

            $table->unsignedBigInteger('wallet_id');
            $table->foreign('wallet_id')->references('id')->on('wallets')->onDelete('cascade');

            $table->string('transaction_type'); // deposit, withdrawal
            $table->decimal('amount', 18, 8);
            $table->string('currency'); // Currency for the transaction
            $table->string('transaction_hash')->unique();
            $table->string('status')->default('pending'); // pending, confirmed, failed
            $table->timestamp('confirmed_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
