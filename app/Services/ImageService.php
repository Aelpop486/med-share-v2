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

    public static function uploadImages($images, $folder)
    {
        $uploadedImageNames = [];

        foreach ($images as $image) {
            if ($image && $image->isValid()) {
                $imageName = time() . uniqid() . '.' . $image->getClientOriginalExtension();
                $relativePath = "storage/$folder/$imageName";
                $path = public_path($relativePath); // Full path
                $image->move(dirname($path), $imageName);
                $uploadedImageNames[] = $relativePath; // Store relative path in the array
            }
        }

        return $uploadedImageNames;
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
