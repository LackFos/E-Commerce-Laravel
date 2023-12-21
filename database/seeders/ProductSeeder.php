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
            'image' => '/storage/upload_images/cardigan rajut.jpg',
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
            'image' => '/storage/upload_images/cargo pantas slava.jpg',
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
            'image' => '/storage/upload_images/double sided hoodie.jpg',
            'price' => 100000,
            'color' => 'Army',
            'stock' => '10',
            'size' => 'XL',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Product #4',
            'slug' => 'product-4',
            'image' => '/storage/upload_images/slim fit pantas.webp',
            'price' => 50000,
            'color' => 'Army',
            'stock' => '2',
            'size' => 'XL',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Product #5',
            'slug' => 'product-5',
            'image' => '/storage/upload_images/kaos polos greyu.webp',
            'price' => 76000,
            'color' => 'Gray',
            'stock' => '2',
            'size' => 'XL',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Product #6',
            'slug' => 'product-6',
            'image' => '/storage/upload_images/mocca blazer.jpg',
            'price' => 69000,
            'color' => 'Pink',
            'stock' => '2',
            'size' => 'XL',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor',
            'category_id' => 2,
        ]);
    }
}
