<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BlockchainEventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'id' =>$this->id,
            'transactionHash' =>$this->transaction_hash,
            'blockHash' =>$this->block_hash,
            'blockNumber' =>$this->block_number,
            'timestamp' =>$this->timestamp,
            'eventType' =>$this->event_type,
            'eventData' =>$this->event_data,
        ];
    }
}
