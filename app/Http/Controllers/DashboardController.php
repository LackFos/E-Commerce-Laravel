<?php

namespace App\Http\Controllers;

use App\Models\OrderStatus;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $orderStatuses = OrderStatus::select('slug', 'name')
            ->leftJoin(
                'orders',
                'order_statuses.id',
                '=',
                'orders.order_status_id'
            )
            ->selectRaw('COUNT(orders.id) as total')
            ->groupBy('order_statuses.id')
            ->get()
            ->map(function ($item) {
                return [
                    'slug' => $item->slug,
                    'name' => $item->name,
                    'total' => $item->total,
                ];
            });

        $emptyStockProduct = Product::where('stock', 0)->get();

        $almostEmptyStockProduct = Product::whereBetween('stock', [
            1,
            20 - 1,
        ])->get();

        return view(
            'Pages.dashboard.beranda',
            compact(
                'orderStatuses',
                'emptyStockProduct',
                'almostEmptyStockProduct'
            )
        );
    }
}
