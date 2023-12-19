<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use App\Models\OrderStatus;
use Illuminate\Http\Request;
use App\Models\PaymentAccount;
use App\Rules\ValidOrderStatus;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class OrderController extends Controller
{
    public function index($slug)
    {
        $user = Auth::user();
        $selectedStatus = OrderStatus::where('slug', $slug)->firstOrFail();
        $orderStatuses = OrderStatus::all();
        $paymentAccount = PaymentAccount::all();

        $userOrders = Order::where('user_id', $user->id)
            ->where('order_status_id', $selectedStatus->id)
            ->get();

        return view(
            'pages.orders',
            compact(
                'user',
                'selectedStatus',
                'orderStatuses',
                'paymentAccount',
                'userOrders'
            )
        );
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
    public function store(Request $request)
    {
        $userId = Auth::id();
        $priceAmount = 0;

        $cartItems = $request->products;

        foreach ($cartItems as $item) {
            $product = Product::find($item['product_id']);
            $priceAmount += $product->price * $item['product_quantity'];
        }

        DB::transaction(function () use ($userId, $priceAmount, $cartItems) {
            $order = new Order();
            $order->user_id = $userId;
            $order->price_amount = $priceAmount;
            $order->save();

            $orderItems = array_map(function ($item) {
                return new OrderItem([
                    'product_id' => $item['product_id'],
                    'quantity' => $item['product_quantity'],
                ]);
            }, $cartItems);

            $order->orderItems()->saveMany($orderItems);
        });

        $cookie = Cookie::forget('cart');
        return redirect('/profile/orders/pending')->withCookie($cookie);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Page Props
        $user = Auth::user();

        // Page Content
        $order = Order::where('id', $id)
            ->where('user_id', $user->id)
            ->firstOrFail();

        return view('pages.order', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $validated = $request->validate([
            'status' => 'exists:order_statuses,name',
        ]);

        $order->update(['status' => $validated['status']]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
