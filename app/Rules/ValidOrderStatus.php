<?php

namespace App\Rules;

use Illuminate\Validation\Rule;

class ValidOrderStatus implements Rule
{
    public function passes($attribute, $value)
    {
        // Define your allowed values for the 'status' column here
        $allowedStatuses = [
            'Perlu Diproses',
            'Sedang Berlangsung',
            'Menunggu Konfirmasi',
            'Selesai',
        ];

        return in_array($value, $allowedStatuses);
    }

    public function message()
    {
        return 'Status orderan yang dipilih tidak valid.';
    }
}
