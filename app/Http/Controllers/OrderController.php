<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Rules\ValidOrderStatus;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $orderStatus = 'Belum Dibayar';

        $cartItems = [
            ['id' => 1, 'quantity' => 1],
            ['id' => 2, 'quantity' => 1],
        ];

        foreach ($cartItems as $item) {
            $products = Product::find($item['id']);
            $priceAmount += $products->price * $item['quantity'];
        }

        DB::transaction(function () use (
            $userId,
            $orderStatus,
            $priceAmount,
            $cartItems
        ) {
            $order = new Order();
            $order->user_id = $userId;
            $order->status = $orderStatus;
            $order->price_amount = $priceAmount;
            $order->save();

            $orderItems = array_map(function ($item) {
                return new OrderItem([
                    'product_id' => $item['id'],
                    'quantity' => $item['quantity'],
                ]);
            }, $cartItems);

            $order->orderItems()->saveMany($orderItems);
        });
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
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
            'status' => [new ValidOrderStatus()],
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
