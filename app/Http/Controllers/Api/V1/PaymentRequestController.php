<?php

namespace App\Http\Controllers\Api\V1;
use Illuminate\Http\Request;

use App\Models\PaymentRequest;
use App\Http\Requests\StorepaymentRequestRequest;
use App\Http\Requests\UpdatepaymentRequestRequest;
use App\Http\Controllers\Controller;

class PaymentRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PaymentRequest::all();
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PaymentRequest $paymentRequests)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PaymentRequest $paymentRequests)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepaymentRequestsRequest $request, PaymentRequest $paymentRequests)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PaymentRequest $paymentRequests)
    {
        //
    }
}
