<?php

namespace App\Utils;

use Illuminate\Support\Facades\Storage;

class Utils
{
    public static function sortProduct($collection, $sort)
    {
        switch ($sort) {
            case 'highest':
                return $collection->sortByDesc('price');
            case 'lowest':
                return $collection->sortBy('price');
            case 'latest':
                return $collection->sortByDesc('created_at');
            case 'oldest':
                return $collection->sortBy('created_at');
            default:
                return $collection;
        }
    }

    public static function uploadImageAndDeleteOld(
        $image,
        $targetDirectory,
        $oldFilePath
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
}
