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
            'is_admin' => 1,
            'password' => Hash::make('admin'),
        ]);

        User::create([
            'username' => 'user',
            'email' => 'user@gmail.com',
            'phone_number' => '0812345677',
            'image' => '/storage/user_image/user.png',
            'password' => Hash::make('user'),
        ]);
    }
}
