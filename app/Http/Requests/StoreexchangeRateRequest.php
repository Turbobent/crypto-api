<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreexchangeRatesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Allow this request for now; adjust authorization logic as needed
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'currency_from' => 'required|string|max:3', // ISO currency code (e.g., USD, EUR)
            'currency_to' => 'required|string|max:3',   // ISO currency code (e.g., BTC, ETH)
            'rate' => 'required|numeric|min:0',         // Exchange rate must be a positive number
            'timestamp' => 'required|date',             // Timestamp of the rate
        ];
    }

    /**
     * Custom error messages for validation.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'currency_from.required' => 'The source currency is required.',
            'currency_to.required' => 'The target currency is required.',
            'rate.required' => 'The exchange rate is required and must be a positive number.',
            'timestamp.required' => 'The timestamp of the rate is required.',
        ];
    }
}
