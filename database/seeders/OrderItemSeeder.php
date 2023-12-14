<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Database\Seeder;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrderItem::create([
            'order_id' => Order::first()->id,
            'product_id' => 1,
            'quantity' => 2,
        ]);

        OrderItem::create([
            'order_id' => Order::first()->id,
            'product_id' => 2,
            'quantity' => 2,
        ]);
    }
}
