<?php

namespace App\Rules;

use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Validation\Rule;

class UniqueBankNameAndNumber implements Rule
{
    public function passes($attribute, $value)
    {
        // Access request data
        $bankName = request('bank_name');
        $bankNumber = request('bank_number');

        // Check if the combination exists in the database
        $exists = DB::table('payment_accounts') // Replace with your actual table name
            ->where('bank_name', $bankName)
            ->where('bank_number', $bankNumber)
            ->exists();

        // If the combination exists, return false; otherwise, return true
        return !$exists;
    }

    public function message()
    {
        return 'Nomor rekening dari bank ini sudah terdaftar';
    }
}
