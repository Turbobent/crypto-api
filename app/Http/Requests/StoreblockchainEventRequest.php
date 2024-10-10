<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlockchainEventRequest extends FormRequest // Updated name to PascalCase
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Allow this request for now; adjust logic for actual authorization as needed
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
            'transaction_hash' => 'required|string|unique:blockchain_events,transaction_hash|max:255', // Unique and max length validation
            'block_hash' => 'required|string|max:255',
            'block_number' => 'required|integer',
            'event_type' => 'required|string|max:100', // Kept from original
            'timestamp' => 'required|date',
            'event_data' => 'nullable|json', // Changed to match your migration, and made it nullable
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
            'transaction_hash.required' => 'Transaction hash is required.',
            'transaction_hash.unique' => 'This transaction hash has already been used.',
            'block_hash.required' => 'Block hash is required.',
            'block_number.required' => 'Block number is required and must be an integer.',
            'event_type.required' => 'The event type is required.',
            'timestamp.required' => 'The timestamp is required and should be a valid date.',
            'event_data.json' => 'Event data must be valid JSON format if provided.',
        ];
    }
}
