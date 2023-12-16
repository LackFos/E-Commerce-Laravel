<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;

class ImageUploadHelper
{
    public static function uploadProfileImage($image)
    {
        $path = $image->store('public/user_image');
        return '/storage/user_image/' . basename($path);
    }

    public static function deleteOldProfile($path)
    {
        $imageFileName = str_replace('/storage/user_image/', '', $path);

        if (
            $path &&
            Storage::disk('public')->exists('user_image/' . $imageFileName)
        ) {
            Storage::disk('public')->delete('user_image/' . $imageFileName);
        }
    }
}
