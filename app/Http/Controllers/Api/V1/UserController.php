<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request; // Importing the Request class

class UserController extends Controller
{
    /**
     * Display a listing of the users along with their wallets and transactions.
     */
    public function index()
    {
        // Eager load wallets and transactions
        $users = User::with(['wallets', 'transactions'])->get();

        return response()->json($users);
    }

    /**
     * Store a newly created user in storage along with wallets and transactions.
     */
    public function store(StoreUserRequest $request)
    {
        // Create user
        $validatedData = $request->validated();
        $validatedData['password'] = bcrypt($validatedData['password']);
        $user = User::create($validatedData);

        // Optionally, create wallets and transactions
        // For demonstration, we are adding one wallet and one transaction as an example
        $wallet = $user->wallets()->create([
            'balance' => 1000,  // Starting balance
            'currency' => 'USD',
        ]);

        $user->transactions()->create([
            'amount' => 500,
            'type' => 'deposit',
            'wallet_id' => $wallet->id,
            'status' => 'completed',
        ]);

        return response()->json($user->load(['wallets', 'transactions']), 201);
    }

    /**
     * Display the specified user with their wallets and transactions.
     */
    public function show($id, Request $request)
    {
        // Fetch the user without any relations initially
        $user = User::findOrFail($id);

        // Check if the include_wallets parameter is set
        $includeWallets = $request->query('include_wallets', false);
        $includeTransactions = $request->query('include_transactions', false);

        // Load wallets if requested
        if ($includeWallets) {
            $user->load('wallets');

            // Load transactions for wallets if requested
            if ($includeTransactions) {
                $user->load('wallets.transactions');
            }
        }

        return response()->json([
            'user' => $user,
            'wallets' => $includeWallets ? $user->wallets : null,
            'transactions' => $includeTransactions && $includeWallets ? $user->wallets->flatMap->transactions : null,
        ]);
    }
}
