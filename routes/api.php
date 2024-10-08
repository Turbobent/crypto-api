<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\UserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function() {
    Route::apiResource('blockchainEvents', BlockchainEventController::class);
    Route::apiResource('cryptocurrencies', CryptocurrencyController::class);
    Route::apiResource('exchangeRates', ExchangeRateController::class);
    Route::apiResource('paymentRequests', PaymentRequestController::class);
    Route::apiResource('transactions', TransactionController::class);
    Route::apiResource('wallets', WalletController::class);
    Route::get('users/{id}', [UserController::class, 'show']);
});
