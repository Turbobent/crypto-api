<?php

namespace App\Http\Controllers\Api\V1;
use Illuminate\Http\Request;
use App\Models\Cryptocurrency;
use App\Http\Requests\StoreCryptocurrencyRequest;
use App\Http\Requests\UpdatecryptocurrencyRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\CryptocurrencyResource;
use App\Http\Resources\V1\CryptocurrencyCollection;

class CryptocurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new Cryptocurrencycollection(Cryptocurrency::paginate());
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
    public function store(StoreCryptocurrencyRequest $request)
    {
        $validated = $request->validated();

        // Proceed with storing the cryptocurrency
        $cryptocurrency = Cryptocurrency::create($validated);

        return response()->json($cryptocurrency, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cryptocurrency $cryptocurrency)
    {
        return new CryptocurrencyResource($cryptocurrency);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cryptocurrency $cryptocurrency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecryptocurrenciesRequest $request, Cryptocurrency $cryptocurrency)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cryptocurrency $cryptocurrency)
    {
        //
    }
}
