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
    public function store(StoreBlockchainEventRequest $request)
    {
        // Check if the transaction hash already exists
        $existingEvent = BlockchainEvent::where('transaction_hash', $request->transaction_hash)->first();

        if ($existingEvent) {
            return response()->json([
                'message' => 'This transaction hash has already been used.'
            ], 400);
        }

        // If it does not exist, create a new blockchain event
        $blockchainEvent = BlockchainEvent::create($request->validated());

        return response()->json($blockchainEvent, 201);
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
