<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'phone_number' => '0812345678',
            'image' => '/storage/product_image/OIP.jpeg',
            'is_admin' => 1,
            'password' => Hash::make('admin'),
        ]);
    }
}
