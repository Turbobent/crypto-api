<?php

namespace App\Http\Controllers\Api\V1;
use Illuminate\Http\Request;

use App\Models\BlockchainEvent;
use App\Http\Requests\StoreblockchainEventRequest;
use App\Http\Requests\UpdateblockchainEventRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\BlockchainEventResource;
use App\Http\Resources\V1\BlockchainEventCollection;

class BlockchainEventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new BlockchainEventCollection(blockchainEvent::paginate());
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
    public function show(blockchainEvent $blockchainEvent)
    {
        return new BlockchainEventResource($blockchainEvent);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(blockchainEvent $blockchainEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateblockchainEventsRequest $request, blockchainEvent $blockchainEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(blockchainEvent $blockchainEvent)
    {
        //
    }
}
