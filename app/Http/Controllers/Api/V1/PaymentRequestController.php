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
        return new StorepaymentRequestsRequest(PaymentRequest::create($request->all()));
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
