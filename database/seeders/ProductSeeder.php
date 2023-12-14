<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Product #1',
            'slug' => 'product-1',
            'image' => '/storage/product_image/OIP.jpeg',
            'price' => 10000,
            'color' => 'Merah',
            'stock' => '5',
            'size' => 'XL',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Product #2',
            'slug' => 'product-2',
            'image' => '/storage/product_image/OIP.jpeg',
            'price' => 55000,
            'color' => 'Biru',
            'stock' => '1',
            'size' => 'XL',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Product #3',
            'slug' => 'product-3',
            'image' => '/storage/product_image/OIP.jpeg',
            'price' => 100000,
            'color' => 'Army',
            'stock' => '10',
            'size' => 'XL',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor',
            'category_id' => 2,
        ]);
    }
}
