<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Wallet;
use App\Http\Requests\StorewalletRequest;
use App\Http\Requests\UpdatewalletRequest;
use App\Http\Controllers\Controller;

class WalletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Wallet::all();
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Wallet $wallets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wallet $wallets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatewalletsRequest $request, Wallet $wallets)
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
