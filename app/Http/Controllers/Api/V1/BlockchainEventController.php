<?php

namespace App\Http\Controllers\Api\V1;
use Illuminate\Http\Request;

use App\Models\blockchainEvent;
use App\Http\Requests\StoreblockchainEventRequest;
use App\Http\Requests\UpdateblockchainEventRequest;
use App\Http\Controllers\Controller;

class BlockchainEventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return blockchainEvent::all();
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
    public function store(StoreblockchainEventRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(blockchainEvents $blockchainEvents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(blockchainEvents $blockchainEvents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateblockchainEventsRequest $request, blockchainEvents $blockchainEvents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(blockchainEvents $blockchainEvents)
    {
        //
    }
}
