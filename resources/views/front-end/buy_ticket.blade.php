@include('front-end.header')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                    <span>Contact</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact__form">
                    <form action="{{ url('buy_ticket/' . $event->id) }}" method="post" id="payment-form">
                        @csrf
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="event_name">Event Name <span
                                    class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" value="{{ $event->name }}" id="event_name"
                                    name="event_name" placeholder="Enter Event Name.." required readonly>
                                <input type="hidden" name="event_id" value="{{ $event->id }}">
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="name">Name <span
                                    class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter your Name.." required>
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="ticket_order">Ticket Order <span
                                    class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <input type="number" name="ticket_order" id="ticket_order" value="1"
                                    min="1" class="form-control">
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="discount">Discount (%)</label>
                            <div class="col-lg-8">
                                <input type="number" class="form-control" value="{{ $event->offer }}" id="discount"
                                    name="discount" placeholder="Enter Discount..">
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="total_price">Total Price<span
                                    class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <input type="number" value="{{ $event->price }}" name="total_price" id="total_price"
                                    class="form-control" readonly>
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <div class="col-lg-6">
                                <button type="submit" class="site-btn" name="submit">Submit</button>
                            </div>
                            <div class="col-lg-6">
                                <button type="button" class="site-btn" name="cancel"
                                    onclick="window.location.href='{{ url('home') }}'">Cancel</button>
                            </div>
                        </div>

                        <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="{{ config('services.razorpay.key') }}"
                            data-amount="{{ $order->amount }}" data-currency="INR" data-order_id="{{ $order->id }}"
                            data-buttontext="Pay with Razorpay" data-name="Your Company Name" data-description="Order #{{ $order->receipt }}"
                            data-prefill.name="John Doe" data-prefill.email="john.doe@example.com" data-theme.color="#F37254"></script>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->
@include('front-end.footer')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const ticketOrderInput = document.getElementById('ticket_order');
        const discountInput = document.getElementById('discount');
        const totalPriceInput = document.getElementById('total_price');
        const basePrice = {{ $event->price }};

        function calculateTotalPrice() {
            const ticketOrder = parseInt(ticketOrderInput.value) || 1;
            const discount = parseFloat(discountInput.value) || 0;
            let totalPrice = ticketOrder * basePrice;
            if (discount > 0) {
                totalPrice -= totalPrice * (discount / 100);
            }
            totalPriceInput.value = totalPrice.toFixed(2);
        }

        ticketOrderInput.addEventListener('input', calculateTotalPrice);
        discountInput.addEventListener('input', calculateTotalPrice);
    });
</script>


{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const ticketOrderInput = document.getElementById('ticket_order');
        const discountInput = document.getElementById('discount');
        const totalPriceInput = document.getElementById('total_price');
        const basePrice = {{ $event->price }};
        const minimumOrderAmount = 100; // Define your minimum order amount here

        function calculateTotalPrice() {
            const ticketOrder = parseInt(ticketOrderInput.value) || 1;
            const discount = parseFloat(discountInput.value) || 0;
            let totalPrice = ticketOrder * basePrice;
            if (discount > 0) {
                totalPrice -= totalPrice * (discount / 100);
            }
            totalPriceInput.value = totalPrice.toFixed(2);
        }

        function checkMinimumOrderAmount() {
            const totalPrice = parseFloat(totalPriceInput.value);
            if (totalPrice < minimumOrderAmount) {
                alert('The total price is less than the minimum allowed amount of ' + minimumOrderAmount +
                    '. Please increase your order amount.');
                return false;
            }
            return true;
        }

        document.getElementById('payment-form').addEventListener('submit', function(event) {
            if (!checkMinimumOrderAmount()) {
                event.preventDefault();
            }
        });

        ticketOrderInput.addEventListener('input', calculateTotalPrice);
        discountInput.addEventListener('input', calculateTotalPrice);
    });
</script> --}}
