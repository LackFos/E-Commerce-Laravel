<?php

namespace App\Http\Controllers;

use App\Models\OrderStatus;
use App\Models\Product;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
            ->groupBy(
                'order_statuses.id',
                'order_statuses.slug',
                'order_statuses.name'
            )
            ->get()
            ->map(function ($item) {
                return [
                    'slug' => $item->slug,
                    'name' => $item->name,
                    'total' => $item->total,
                ];
            });

        $emptyStockProduct = Product::where('stock', 0)->get();

        $almostEmptyStockProduct = Product::whereBetween('stock', [1, 20 - 1])
            ->orderBy('stock')
            ->get();

        $metaTitle = 'Dashboard';

        return view(
            'Pages.dashboard.beranda',
            compact(
                'metaTitle',
                'orderStatuses',
                'emptyStockProduct',
                'almostEmptyStockProduct'
            )
        );
    }
}
