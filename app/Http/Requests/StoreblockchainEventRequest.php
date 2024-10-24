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
            'transactionHash' => 'required|string|unique:blockchain_events,transaction_hash|max:255', // Unique and max length validation
            'blockHash' => 'required|string|max:255',
            'blockNumber' => 'required|integer',
            'eventType' => 'required|string|max:100', // Kept from original
            'timestamp' => 'required|date',
            'eventData' => 'nullable|json', // Changed to match migration, and made it nullable
        ];
    }

    protected function prepareForValidation(){
        $this->merge([
            'transaction_hash'=> $this->transactionHash,
            'block_hash'=> $this->blockHash,
            'block_number'=> $this->blockNumber,
            'event_type'=> $this->eventType,
            'event_data'=> $this->eventData,
        ]);
    }
    /**
     * Custom error messages for validation.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'transactionHash.required' => 'Transaction hash is required.',
            'transactionHash.unique' => 'This transaction hash has already been used.',
            'blockHash.required' => 'Block hash is required.',
            'blockNumber.required' => 'Block number is required and must be an integer.',
            'eventType.required' => 'The event type is required.',
            'timestamp.required' => 'The timestamp is required and should be a valid date.',
            'eventData.json' => 'Event data must be valid JSON format if provided.',
        ];
    }
}
