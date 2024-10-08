<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCryptocurrencyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255|unique:cryptocurrencies,name',
            'symbol' => 'required|string|max:10|unique:cryptocurrencies,symbol',
            'price_usd' => 'required|numeric|min:0',
            'market_cap' => 'required|numeric|min:0',
        ];
    }
}
