<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoretransactionsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Allow this request; adjust authorization logic as needed
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
            'customer_id' => 'required|exists:customers,id', // Ensure the customer exists
            'amount' => 'required|numeric|min:0.01', // The transaction amount must be positive
            'currency' => 'required|string|max:3', // Currency code (e.g., USD, BTC)
            'payment_method' => 'required|string|max:50', // Payment method used for the transaction
            'transaction_id' => 'required|string|max:100|unique:transactions,transaction_id', // Ensure transaction ID is unique
            'status' => 'required|string|in:pending,completed,failed,cancelled', // Transaction status
            'transaction_date' => 'required|date', // Transaction date
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
            'customer_id.required' => 'The customer ID is required.',
            'customer_id.exists' => 'The customer does not exist.',
            'amount.required' => 'The transaction amount is required.',
            'currency.required' => 'The currency is required.',
            'payment_method.required' => 'The payment method is required.',
            'transaction_id.required' => 'The transaction ID is required.',
            'transaction_id.unique' => 'This transaction ID has already been used.',
            'status.required' => 'The transaction status is required.',
            'status.in' => 'The status must be one of the following: pending, completed, failed, or cancelled.',
            'transaction_date.required' => 'The transaction date is required.',
        ];
    }
}
