<!DOCTYPE html>
<html>

<head>
    <title>Razorpay Payment</title>
</head>

<body>
    <form action="{{ route('payment.callback') }}" method="POST">
        @csrf
        <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="{{ config('services.razorpay.key') }}"
            data-amount="{{ $order->amount }}" data-currency="INR" data-order_id="{{ $order->id }}"
            data-buttontext="Pay with Razorpay" data-name="Your Company Name" data-description="Order #{{ $order->receipt }}"
            data-prefill.name="John Doe" data-prefill.email="john.doe@example.com" data-theme.color="#F37254"></script>
    </form>
</body>

</html>
