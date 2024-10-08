<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreblockchainEventsRequest extends FormRequest
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
            'event_name' => 'required|string|max:255',
            'blockchain' => 'required|string|max:100',
            'transaction_id' => 'required|string|unique:blockchain_events,transaction_id|max:255',
            'event_type' => 'required|string|max:100',
            'data' => 'required|json', // Assuming event data is stored in JSON format
            'timestamp' => 'required|date',
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
            'event_name.required' => 'The event name is required.',
            'blockchain.required' => 'Please specify the blockchain.',
            'transaction_id.required' => 'Transaction ID is required and must be unique.',
            'transaction_id.unique' => 'This transaction ID has already been used.',
            'event_type.required' => 'The type of event is required.',
            'data.required' => 'Event data is required and should be in JSON format.',
            'timestamp.required' => 'The timestamp is required and should be a valid date.',
        ];
    }
}
