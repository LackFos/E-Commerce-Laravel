<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\PaymentAccount;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function showProfile()
    {
        $user = Auth::user();
        return view('pages.profile', compact('user'));
    }

    public function showOrders($slug)
    {
        // Page Props
        $user = Auth::user();
        $selectedStatus = OrderStatus::where('slug', $slug)->firstOrFail();
        $orderStatuses = OrderStatus::all();
        $paymentAccount = PaymentAccount::all();

        // Order Props
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
}
