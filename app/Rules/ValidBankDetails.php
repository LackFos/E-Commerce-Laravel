<?php

namespace App\Rules;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class ValidBankDetails implements Rule
{
    public function passes($attribute, $value)
    {
        // Access request data
        $bankName = request('bank_name');
        $bankNumber = request('bank_number');

        // Check if the combination exists in the database
        $exists = DB::table('your_table_name') // Replace with your actual table name
            ->where('bank_name', $bankName)
            ->where('bank_number', $bankNumber)
            ->exists();

        // If the combination exists, return false; otherwise, return true
        return !$exists;
    }

    public function message()
    {
        return 'The combination of bank name and bank number must be unique.';
    }
}
