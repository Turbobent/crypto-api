<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CryptoCurrencyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        return[
            'id'=> $this->id,
            'name'=> $this->name,
            'symbol'=> $this->symbol,
            'priceUsd'=> $this->price_usd,
            'marketCap'=> $this->market_cap,
        ];
    }
}
