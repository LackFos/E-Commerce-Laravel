<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Outwear',
            'slug' => 'outwear',
        ]);

        Category::create([
            'name' => 'T-Shirt',
            'slug' => 't-shirt',
        ]);
    }
}
