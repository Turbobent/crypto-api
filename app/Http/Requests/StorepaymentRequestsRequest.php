<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorepaymentRequestsRequest extends FormRequest
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
            'userId' => 'required|exists:users,id', // The ID of the user making the request
            'recipientAccount' => 'required|string|max:255', // The account details of the recipient
            'amount' => 'required|numeric|min:0.01', // The amount to be paid
            'currency' => 'required|string|max:3', // Currency code (e.g., USD, BTC)
            'paymentMethod' => 'required|string|max:50', // Payment method (e.g., credit card, crypto wallet)
            'transactionId' => 'nullable|string|max:100', // Optional transaction ID, if already available
            'status' => 'required|string|in:pending,completed,failed,cancelled', // Payment status
            'paidAt' => 'nullable|date', // Timestamp when the payment was completed, if available
            'recipientAddress' => 'required|string|max:255', // The recipient's address
        ];
    }

    protected function prepareForValidation(){
        $this->merge([
            'user_id'=> $this->userId,
            'payment_method'=> $this->paymentMethod,
            'transaction_id'=> $this->transactionId,
            'recipient_account'=> $this->recipientAccount,
            'paid_at'=> $this->paidAt,
            'recipient_address'=> $this->recipientAddress,
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
            'customerId.required' => 'A valid customer ID is required.',
            'recipientAccount.required' => 'Recipient account details are required.',
            'amount.required' => 'The payment amount is required.',
            'currency.required' => 'The currency is required.',
            'paymentMethod.required' => 'The payment method is required.',
            'status.required' => 'The payment status is required.',
            'status.in' => 'The status must be one of the following: pending, completed, failed, or cancelled.',
        ];
    }
}
