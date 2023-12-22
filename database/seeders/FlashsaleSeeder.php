<?php

namespace Database\Seeders;

use App\Models\Flashsale;
use Illuminate\Database\Seeder;

class FlashsaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Flashsale::create([
            'product_id' => 1,
            'price_after_discount' => 7000,
        ]);

        // Flashsale::create([
        //     'product_id' => 2,
        //     'price_after_discount' => 10000,
        // ]);

        // Flashsale::create([
        //     'product_id' => 3,
        //     'price_after_discount' => 10000,
        // ]);

        // Flashsale::create([
        //     'product_id' => 4,
        //     'price_after_discount' => 10000,
        // ]);

        // Flashsale::create([
        //     'product_id' => 5,
        //     'price_after_discount' => 10000,
        // ]);

        // Flashsale::create([
        //     'product_id' => 6,
        //     'price_after_discount' => 10000,
        // ]);
    }
}
