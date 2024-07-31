<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;

class PaymentController extends Controller
{
    protected $razorpay;

    public function __construct(Api $razorpay)
    {
        $this->razorpay = $razorpay;
    }

    public function createOrder(Request $request)
    {
        $orderData = [
            'receipt'         => 'rcptid_11',
            'amount'          => 50000, // amount in the smallest currency unit
            'currency'        => 'INR'
        ];

        $razorpayOrder = $this->razorpay->order->create($orderData);
        
        return view('front-end.payment', ['order' => $razorpayOrder]);
    }

    public function paymentCallback(Request $request)
    {
        // Validate and handle the payment callback here
        $paymentId = $request->input('razorpay_payment_id');
        $orderId = $request->input('razorpay_order_id');
        $signature = $request->input('razorpay_signature');

        $signatureVerified = $this->razorpay->utility->verifyPaymentSignature([
            'razorpay_order_id' => $orderId,
            'razorpay_payment_id' => $paymentId,
            'razorpay_signature' => $signature,
        ]);

        if ($signatureVerified) {
            // Payment was successful, handle the post-payment process
            return redirect()->route('payment.success');
        } else {
            // Payment failed, handle the failure
            return redirect()->route('payment.failure');
        }
    }
}
