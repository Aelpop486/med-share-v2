<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Helpers\ApiResponse;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required'],
        ], [], [
            'email' => 'Email',
            'password' => 'Password'
        ]);

        if ($validator->fails()) {
            return ApiResponse::sendResponse(422, 'Login Validation Errors', $validator->errors());
        }

        $credentials = $request->only('email', 'password');
        $user = User::where('email', $credentials['email'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            $token = $user->createToken('MyAuthApp')->plainTextToken;
            $data['token'] = $token;
            $data['name'] = $user->name;
            $data['email'] = $user->email;

            return ApiResponse::sendResponse(200, "Login Successfully", $data);
        } else {
            return ApiResponse::sendResponse(401, "Invalid credentials", null);
        }
    }
}


