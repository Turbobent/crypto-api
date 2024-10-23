<?php

namespace App\Http\Controllers\Api\V1;
use Illuminate\Http\Request;

use App\Models\Wallet;
use App\Http\Requests\StorewalletRequest;
use App\Http\Requests\UpdatewalletRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\WalletResource;
use App\Http\Resources\V1\WalletCollection;

class WalletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new WalletCollection(Wallet::paginate());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorewalletRequest $request)
    {
        $validated = $request->validated();

        // Proceed with storing the cryptocurrency
        $wallet = Wallet::create($validated);

        return response()->json($wallet, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Wallet $wallet)
    {
        return new WalletResource($wallet);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wallet $wallet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatewalletsRequest $request, Wallet $wallet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wallet $wallets)
    {
        //
    }
}
