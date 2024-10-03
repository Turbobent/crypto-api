<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'id'=> $this->id,
            'walletId'=> $this->wallet_id,
            'transactionType'=> $this->transaction_type,
            'amount'=> $this->amount,
            'currency'=> $this->currency,
            'transactionHash'=> $this->transaction_hash,
            'status'=> $this->status,
            'confirmedAt'=> $this->confirmed_at,
       
        ];
    }
}
