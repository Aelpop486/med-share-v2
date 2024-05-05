<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use App\Http\Helpers\ApiResponse;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ResetPasswordController extends Controller
{
    public function resetPassword(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'max:255'],
            'old_password' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'password_confirmation' => ['required'],
        ], [], [
            'email' => 'Email',
            'old_password' => 'Old Password',
            'password' => 'New Password',
            'password_confirmation' => 'Password Confirmation'
        ]);
    
        if ($validator->fails()) {
            return ApiResponse::sendResponse(422, 'Validation Errors', $validator->errors());
        }
    
        // Retrieve the user by email
        $user = User::where('email', $request->email)->first();
    
        if (!$user) {
            return ApiResponse::sendResponse(404, 'User not found');
        }
    
        // Verify the old password
        if (!Hash::check($request->old_password, $user->password)) {
            return ApiResponse::sendResponse(422, 'Invalid old password');
        }
        
        // Check if the new password is different from the old password
        if (Hash::check($request->password, $user->password)) {
            return ApiResponse::sendResponse(422, 'New password must be different from old password');
        }
    
        // Update the user's password
        $user->password = Hash::make($request->password);
        $user->save();
    
        return ApiResponse::sendResponse(200, 'Password Reset Successfully');
    }   

}
