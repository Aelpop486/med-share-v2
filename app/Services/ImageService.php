<?php


namespace App\Services;


class ImageService
{
    public static function uploadImage($image, $folder)
    {
        if ($image && $image->isValid()) {
            $imageName = time() . uniqid() . '.' . $image->getClientOriginalExtension();
            $path = public_path("storage/$folder");
            $image->move($path, $imageName);
            return $path . '/' . $imageName; // Return full path
        }
        return null;
    }

    public static function deleteImage($imagePath)
    {
        if ($imagePath && file_exists($imagePath)) {
            unlink($imagePath);
            return true;
        }
        return false; // Return false if no image path provided or image not found
    }
}
