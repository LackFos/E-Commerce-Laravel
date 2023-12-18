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
    }
}
