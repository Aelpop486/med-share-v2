<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        $validatedData = $request->validate([
            'name' => 'string|max:255',
            'phone' => 'string|max:255',
            'image' => 'string|max:255',
            'national_id' => 'string|max:255',
            'gender' => 'in:male,female',
            'date_of_birth' => 'date', // Change the validation rule to date
        ]);
        $user->update($validatedData);
        
        return response()->json(['message' => 'Profile updated successfully']);
    }
}