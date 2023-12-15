<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Illuminate\Database\Seeder;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrderStatus::create([
            'name' => 'Menunggu Pembayaran',
            'slug' => 'pending',
        ]);

        OrderStatus::create([
            'name' => 'Sedang Diproses',
            'slug' => 'on-going',
        ]);

        OrderStatus::create([
            'name' => 'Selesai',
            'slug' => 'completed',
        ]);

        OrderStatus::create([
            'name' => 'Dibatalkan',
            'slug' => 'canceled',
        ]);
    }
}
