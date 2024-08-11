<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ImageService;
use Illuminate\Http\Request;
//use App\Services\ImageService;

class ProfileController extends Controller
{

    //Get user's profile.
    public function getProfile(Request $request)
    {
        $user = $request->user();

        return response()->json([
            'name' => $user->name,
            'email' => $user->email,
            'phone' => $user->phone,
            'image' => $user->image,
            'national_id' => $user->national_id,
            'gender' => $user->gender,
            'date_of_birth' => $user->date_of_birth,
        ]);
    }

    //  Update user's profile.

    public function updateProfile(Request $request)
    {
        $user = $request->user();

        // Validate the input data except the date_of_birth
        $validatedData = $request->validate([
            'name' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:5048',
            'national_id' => 'nullable|image|mimes:png,jpg,jpeg|max:5048',
            'gender' => 'nullable|in:male,female',
            'date_of_birth' => 'nullable|date', // General date validation
        ]);
        if ($request->hasFile("image")) {
            $validatedData["image"] = ImageService::uploadImage($request->file("image"), "images");
        }
        if ($request->hasFile("national_id")) {
            $validatedData["national_id"] = ImageService::uploadImage($request->file("national_id"), "national_ids");
        }
        // Convert date format if necessary
        if (!empty($request->date_of_birth)) {
            $dateOfBirth = $request->date_of_birth;
            try {
                // Attempt to parse the date in various formats
                $formattedDate = \Carbon\Carbon::createFromFormat('d-m-Y', $dateOfBirth)->format('Y-m-d');
            } catch (\Exception $e) {
                try {
                    $formattedDate = \Carbon\Carbon::createFromFormat('Y-m-d', $dateOfBirth)->format('Y-m-d');
                } catch (\Exception $e) {
                    return response()->json(['message' => 'Invalid date format'], 422);
                }
            }
            $validatedData['date_of_birth'] = $formattedDate;
        }

        // Update user profile
        $user->update($validatedData);

        return response()->json(['message' => 'Profile updated successfully']);
    }
}
