<?php

namespace Database\Seeders;

use App\Models\PaymentAccount;
use Illuminate\Database\Seeder;

class PaymentAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaymentAccount::create([
            'bank_name' => 'BCA',
            'bank_number' => '16839472003',
            'bank_owner' => 'John Doe',
        ]);

        PaymentAccount::create([
            'bank_name' => 'Mandiri',
            'bank_number' => '16839472003',
            'bank_owner' => 'Chris',
        ]);
    }
}
