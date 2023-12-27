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
            self::deleteImage($oldFilePath, $targetDirectory);
        }

        return $newFileUrl;
    }

    public static function deleteImage($imagePath, $targetDirectory)
    {
        $fileBasename = basename($imagePath);

        if (
            Storage::disk('public')->exists(
                $targetDirectory . '/' . $fileBasename
            )
        ) {
            Storage::disk('public')->delete(
                $targetDirectory . '/' . $fileBasename
            );
        }
    }

    public static function isAdmin()
    {
        return Auth::user()->is_admin == 1;
    }
}
