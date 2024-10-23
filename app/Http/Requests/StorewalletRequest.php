<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorewalletsRequest extends FormRequest
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
            'userId' => 'required|exists:users,id', // Ensure the user exists
            'balance' => 'required|numeric|min:0', // Wallet balance must be 0 or greater
            'currency' => 'required|string|max:3', // Currency code (e.g., USD, BTC)
            'walletAddress' => 'required|string|max:100|unique:wallets,wallet_address', // Ensure the wallet address is unique
            'walletType' => 'required|string|in:crypto,fiat', // Ensure the wallet type is either crypto or fiat
        ];
    }

    protected function prepareForValidation(){
        $this->merge([
            'user_id'=> $this->userId,
            'wallet_address'=> $this->walletAddress,
            'wallet_type'=> $this->walletType,
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
            'user_id.required' => 'The user ID is required.',
            'user_id.exists' => 'The user does not exist.',
            'balance.required' => 'The wallet balance is required.',
            'balance.min' => 'The wallet balance must be 0 or greater.',
            'currency.required' => 'The currency is required.',
            'wallet_address.required' => 'The wallet address is required.',
            'wallet_address.unique' => 'This wallet address has already been used.',
            'wallet_type.required' => 'The wallet type is required.',
            'wallet_type.in' => 'The wallet type must be either "crypto" or "fiat".',
        ];
    }
}
