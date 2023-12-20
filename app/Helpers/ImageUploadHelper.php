<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;

class ImageUploadHelper
{
    public static function uploadProfileImage($image)
    {
        $path = $image->store('public/user_images');
        return '/storage/user_images/' . basename($path);
    }

    public static function deleteOldProfile($path)
    {
        $imageFileName = str_replace('/storage/user_images/', '', $path);

        if (
            $path &&
            Storage::disk('public')->exists('user_images/' . $imageFileName)
        ) {
            Storage::disk('public')->delete('user_images/' . $imageFileName);
        }
    }

    public static function uploadPaymentReceipt($image)
    {
        $path = $image->store('public/payment_images');
        return '/storage/payment_images/' . basename($path);
    }

    public static function deleteOldReceipt($path)
    {
        $imageFileName = str_replace('/storage/payment_images/', '', $path);

        if (
            $path &&
            Storage::disk('public')->exists('payment_images/' . $imageFileName)
        ) {
            Storage::disk('public')->delete('payment_images/' . $imageFileName);
        }
    }
}
