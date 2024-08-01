<?php

namespace App\Http\Controllers;
use App\Models\events;
use App\Models\categeroy;
use App\Models\TicketOrder;
use App\Models\users;
use App\Models\contact;
use Razorpay\Api\Api;


use Illuminate\Http\Request;

class homecontrollers extends Controller
{
    protected $razorpay;
    public function __construct()
    {
        $this->razorpay = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
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
    public function home()
    {
        $event = events::with('category')->get();
        $categories = categeroy::all();
        return view('front-end.home' , ['event' => $event, 'categories' => $categories]);
    }

    public function about()
    {
        return view('front-end.about');
    }

    public function discography()
    {
        $event = events::with('category')->get();
        $categories = categeroy::all();
        return view('front-end.discography', ['event' => $event, 'categories' => $categories]);
    }

    public function tour()
    {
        $event = events::with('category')->get();
        $categories = categeroy::all();
         return view('front-end.tours', ['event' => $event, 'categories' => $categories]);
    }

    

    public function buyTicket(Request $request, $id)
    {
        $event = events::find($id);
        $ticketOrder = $request->ticket_order;
        $basePrice = $event->price;
        $discount = $request->discount ?? 0;
    
        $totalPrice = $ticketOrder * $basePrice;
        if ($discount > 0) {
            $totalPrice -= $totalPrice * ($discount / 100);
        }
    
        if ($totalPrice != $request->total_price) {
            return redirect()->back()->withErrors(['total_price' => 'Total price does not match. Please recalculate.']);
        }
    
        // Razorpay order creation
        $api = new Api(config('services.razorpay.key'), config('services.razorpay.secret'));
    
        // $orderData = [
        //     'amount' => $totalPrice * 100, // Amount in paise
        //     'currency' => 'INR',
        //     'receipt' => 'order_rcptid_11'
        // ];
        $orderData = [
            'receipt'         => 'rcptid_11',
            'amount'          => 50000, // amount in the smallest currency unit
            'currency'        => 'INR'
        ];
        $razorpayOrder = $api->order->create($orderData);
    
        return view('front-end.buy_ticket', [
            'event' => $event,
            'order' => $razorpayOrder,
            'categories' => categeroy::all()
        ]);
    }
    


    
    public function paymentCallback(Request $request)
    {
        $api = new Api(config('services.razorpay.key'), config('services.razorpay.secret'));
    
        // Verify payment signature
        $attributes = [
            'razorpay_order_id' => $request->input('razorpay_order_id'),
            'razorpay_payment_id' => $request->input('razorpay_payment_id'),
            'razorpay_signature' => $request->input('razorpay_signature'),
        ];
    
        try {
            $api->utility->verifyPaymentSignature($attributes);
            // Payment signature is valid, update the order status or process accordingly
        } catch (\Exception $e) {
            // Invalid signature
            return redirect()->back()->withErrors(['payment' => 'Payment verification failed']);
        }
    
        // Process successful payment
        return redirect()->route('home')->with('success', 'Payment successful');
    }


    public function buy_ticket(Request $request, $id)
    {
        $user = users::where('email', session('email'))->first();
        // dd($user);   
        $user_id = $user->id;
        // dd($user_id);
        $event = events::find($id);
        $ticket = new TicketOrder();
        $ticket->event_id = $request->id;
        $ticket->u_id = $user_id;
        $ticket->quantity = $request->ticket_order;
        $ticket->total_price = $request->total_price;
        $ticket->discount_type = 'flat';
        $ticket->payment_id = $request->razorpay_payment_id;
        $ticket->discount_value = $request->discount ?? 0;
        $ticket->save();

        $event = events::with('category')->get();
        $categories = categeroy::all();

        return view('front-end.home', ['event' => $event, 'categories' => $categories, 'user' => $user]);
    }


    public function contact()
    {
        return view('front-end.contact');
    }

    public function contact_send(Request $request)
    {
        // dd($request->all());
        $user = users::where('email', session('email'))->first();
        $user_id = $user->id;
        // dd($user_id);
        $contact = new contact();
        $contact->u_id = $user_id;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->Website = $request->website;
        $contact->comment= $request->comment;
        $contact->save();

        $event = events::with('category')->get();
        $categories = categeroy::all();
        return view('front-end.home', ['event' => $event, 'categories' => $categories, 'user' => $user]);
    }
}


