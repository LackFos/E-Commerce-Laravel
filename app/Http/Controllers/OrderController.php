<?php

namespace App\Http\Controllers;

use Exception;
use App\Utils\Utils;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use App\Models\OrderStatus;
use Illuminate\Http\Request;
use App\Models\PaymentAccount;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UploadPaymentReceiptRequest;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($slug)
    {
        $orderStatuses = OrderStatus::all();
        $selectedStatus = $orderStatuses->where('slug', $slug)->first();
        abort_if(!$selectedStatus, 404, 'Status order tidak valid');

        $user = Auth::user();
        $paymentAccount = PaymentAccount::all();

        $userOrders = Order::with([
            'orderItems' => function ($query) {
                $query->with([
                    'product' => function ($query) {
                        $query->withTrashed();
                    },
                ]);
            },
        ])
            ->where('user_id', $user->id)
            ->where('order_status_id', $selectedStatus->id)
            ->latest()
            ->paginate(10);

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
     * Display a listing of the resource (Admin Only).
     */
    public function index_admin(OrderStatus $orderStatus)
    {
        $orderStatuses = OrderStatus::all();
        $orders = Order::where('order_status_id', $orderStatus->id)
            ->with([
                'orderItems.product' => function ($query) {
                    $query->withTrashed();
                },
            ])
            ->latest()
            ->paginate(10);

        return view(
            'pages.dashboard.pesanan',
            compact('orderStatus', 'orderStatuses', 'orders')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userId = Auth::id();

        $cartItems = $request->input('products');
        if (!$cartItems) {
            abort(403, 'Tidak ada barang dikeranjang');
        }

        // Fetch all products at once
        $productIds = array_column($cartItems, 'product_id');
        $products = Product::whereIn('id', $productIds)
            ->get()
            ->keyBy('id');

        $priceAmount = 0;
        foreach ($cartItems as $item) {
            $product = $products[$item['product_id']] ?? null;
            abort_if(
                !$product,
                404,
                'Terdapat produk yang sudah tidak ada dikeranjangmu'
            );

            $priceAmount +=
                ($product->flashsale->price_after_discount ?? $product->price) *
                $item['product_quantity'];
        }

        DB::transaction(function () use (
            $userId,
            $priceAmount,
            $cartItems,
            $products
        ) {
            $order = new Order();
            $order->user_id = $userId;
            $order->price_amount = $priceAmount;
            $order->save();

            $orderItems = array_map(function ($item) use ($products) {
                $product = $products[$item['product_id']];
                return new OrderItem([
                    'product_id' => $product->id,
                    'price' =>
                        $product->flashsale->price_after_discount ??
                        $product->price,
                    'quantity' => $item['product_quantity'],
                ]);
            }, $cartItems);

            $order->orderItems()->saveMany($orderItems);
        });

        return redirect('/profile/orders/pending');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = Auth::user();

        $order = Order::where('id', $id)
            ->where('user_id', $user->id)
            ->firstOrFail();

        return view('pages.order', compact('order'));
    }

    /**
     * Display the specified resource (Admin Only).
     */
    public function show_admin(Order $order)
    {
        return view('pages.dashboard.pesanan-detail', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the  status of specified resource in storage.
     */
    public function acceptOrder(Order $order)
    {
        $order->update(['order_status_id' => 2]);
        return redirect()
            ->back()
            ->with('success', 'Pesanan diterima');
    }

    public function completeOrder(Order $order)
    {
        DB::beginTransaction();
        try {
            $order->update(['order_status_id' => 3]);
            $orderItems = $order->orderItems;

            foreach ($orderItems as $orderItem) {
                $product = $orderItem->product;
                if ($product->stock < $orderItem->quantity) {
                    DB::rollBack();
                    return redirect()
                        ->back()
                        ->with(
                            'error',
                            'Stok ' .
                                $product->name .
                                ' Tidak cukup untuk memenuhi pesanan'
                        );
                }

                $product->stock -= $orderItem->quantity;
                $product->save();
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            // Optionally log the error or handle it as required
            return redirect()
                ->back()
                ->with('error', 'Terjadi error, silahkan coba lagi.');
        }

        return redirect()
            ->back()
            ->with('success', 'Pesanan selesai');
    }

    public function rejectOrder(Order $order)
    {
        $order->update(['order_status_id' => 4]);
        return redirect()
            ->back()
            ->with('success', 'Pesanan dibatalkan');
    }

    /**
     * Update the payment proof of specified resource in storage.
     */
    public function updateOrderPayment(UploadPaymentReceiptRequest $request)
    {
        DB::beginTransaction();

        try {
            if ($request->hasFile('payment_receipt')) {
                $newImagePath = Utils::uploadImage(
                    $request->file('payment_receipt'),
                    'payment_images',
                    $request->order->payment_receipt
                );
                // Update the order with the new receipt image path
                $request->order->payment_receipt = $newImagePath;
                $request->order->save();
            }

            DB::commit();
            return back()->with(
                'success',
                'Bukti Pembayaran berhasil diperbarui'
            );
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return back()->with('error', 'Gagal memperbarui Bukti Pembayaran');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
