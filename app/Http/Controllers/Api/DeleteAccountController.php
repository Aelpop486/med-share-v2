<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Helpers\ApiResponse;
use Illuminate\Support\Facades\Auth;

class DeleteAccountController extends Controller
{
    public function deleteAccount(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required'],
        ], [], [
            'email' => 'Email',
            'password' => 'Password'
        ]);

        if ($validator->fails()) {
            return ApiResponse::sendResponse(422, 'Validation Errors', $validator->errors());
        }

        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();

            $user->tokens()->delete();
            // Delete the user's account
            $user->delete();

            return ApiResponse::sendResponse(200, 'Account Deleted Successfully');
        } else {
            return ApiResponse::sendResponse(401, 'Unauthorized');
        }
    }
}
