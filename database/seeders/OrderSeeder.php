<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create([
            'user_id' => User::first()->id,
            'payment_receipt' => 'storage/payment_images/bill.png',
            'price_amount' => 50000,
        ]);
    }
}
