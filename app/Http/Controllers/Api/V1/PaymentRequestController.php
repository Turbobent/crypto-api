<?php

namespace App\Http\Controllers\Api\V1;
use Illuminate\Http\Request;

use App\Models\PaymentRequest;
use App\Http\Requests\StorepaymentRequestsRequest;
use App\Http\Requests\UpdatepaymentRequestRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\PaymentRequestResource;
use App\Http\Resources\V1\PaymentRequestCollection;

class PaymentRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new PaymentRequestCollection(PaymentRequest::paginate());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepaymentRequestsRequest $request)
    {
        // Create a new PaymentRequest using the validated data
        $paymentRequest = PaymentRequest::create([
            'user_id' => $request->userId, // Ensure user_id is passed
            'recipient_account' => $request->recipientAccount,
            'amount' => $request->amount,
            'currency' => $request->currency,
            'payment_method' => $request->paymentMethod,
            'transaction_id' => $request->transactionId,
            'status' => $request->status,
            'paid_at' => $request->paidAt,
            'recipient_address' => $request->recipientAddress,
        ]);

        // Return the created PaymentRequest or a success response
        return response()->json($paymentRequest, 201); // 201 Created status
    }



    /**
     * Display the specified resource.
     */
    public function show(PaymentRequest $paymentRequest)
    {
        return new PaymentRequestResource($paymentRequest);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PaymentRequest $paymentRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepaymentRequestsRequest $request, PaymentRequest $paymentRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PaymentRequest $paymentRequest)
    {
        //
    }
}
