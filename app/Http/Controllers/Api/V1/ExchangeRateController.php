<?php

namespace App\Http\Controllers\Api\V1;
use Illuminate\Http\Request;

use App\Models\ExchangeRate;
use App\Http\Requests\StoreexchangeRateRequest;
use App\Http\Requests\UpdateexchangeRateRequest;
use App\Http\Controllers\Controller;

class ExchangeRateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ExchangeRate::all();
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
    public function store(StoreexchangeRateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ExchangeRate $exchangeRates)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExchangeRate $exchangeRates)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateexchangeRatesRequest $request, ExchangeRate $exchangeRates)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExchangeRate $exchangeRates)
    {
        //
    }
}
