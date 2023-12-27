<?php

namespace App\Utils;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Utils
{
    public static function uploadImage(
        $image,
        $targetDirectory,
        $oldFilePath = ''
    ) {
        // Validate image
        if (!$image || !$image->isValid()) {
            return null;
        }

        // Store the image
        $path = $image->store($targetDirectory, 'public');
        if (!$path) {
            return null;
        }

        // Construct URL for the new file
        $newFileUrl = '/storage/' . $path;

        // Delete old file if it exists
        if ($oldFilePath) {
            $oldFileFullPath = str_replace('/storage/', '', $oldFilePath);
            if (Storage::disk('public')->exists($oldFileFullPath)) {
                Storage::disk('public')->delete($oldFileFullPath);
            }
        }

        return $newFileUrl;
    }

    public static function isAdmin()
    {
        return Auth::user()->is_admin == 1;
    }
}
