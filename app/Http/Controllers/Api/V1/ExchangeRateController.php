<?php

namespace App\Http\Controllers\Api\V1;
use Illuminate\Http\Request;

use App\Models\ExchangeRate;
use App\Http\Requests\StoreexchangeRateRequest;
use App\Http\Requests\UpdateexchangeRateRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\ExchangeRateResource;
use App\Http\Resources\V1\ExchangeRateCollection;

class ExchangeRateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new ExchangeRateCollection(ExchangeRate::paginate());
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
    public function show(ExchangeRate $exchangeRate)
    {
        return new ExchangeRateResource($exchangeRate);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExchangeRate $exchangeRate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateexchangeRatesRequest $request, ExchangeRate $exchangeRate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExchangeRate $exchangeRate)
    {
        //
    }
}
