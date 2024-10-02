<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Cryptocurrency;
use App\Http\Requests\StorecryptocurrencyRequest;
use App\Http\Requests\UpdatecryptocurrencyRequest;
use App\Http\Controllers\Controller;

class CryptocurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Cryptocurrency::all();
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
    public function store(StorecryptocurrenciesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cryptocurrency $cryptocurrencies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cryptocurrency $cryptocurrencies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecryptocurrenciesRequest $request, Cryptocurrency $cryptocurrencies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cryptocurrency $cryptocurrencies)
    {
        //
    }
}
