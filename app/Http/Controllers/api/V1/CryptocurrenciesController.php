<?php

namespace App\Http\Controllers\api\V1;

use App\Models\cryptocurrencies;
use App\Http\Requests\StorecryptocurrenciesRequest;
use App\Http\Requests\UpdatecryptocurrenciesRequest;

class CryptocurrenciesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(cryptocurrencies $cryptocurrencies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cryptocurrencies $cryptocurrencies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecryptocurrenciesRequest $request, cryptocurrencies $cryptocurrencies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cryptocurrencies $cryptocurrencies)
    {
        //
    }
}
