<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PaymentRequestResource extends JsonResource
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
            'userId'=> $this->user_id,
            'recipientAddress'=> $this->recipient_address,
            'amount'=> $this->amount,
            'currency'=> $this->currency,
            'status'=> $this->status,
        ];
    }
}
