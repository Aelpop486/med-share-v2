<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Helpers\ApiResponse;
use Illuminate\Support\Facades\Auth;

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

        if($validator->fails()){
            return ApiResponse::sendResponse(422, 'Login Validation Errors',
                $validator->errors());
        }

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $tokenCount = $user->tokens()->count();

            // Check if the user already has three tokens
            if ($tokenCount >= 3) {
                return ApiResponse::sendResponse(403, "Maximum login limit reached", null);
            }

            // Generate a new token
            $token = $user->createToken('MyAuthApp')->plainTextToken;
            $data['token'] = $token;
            $data['name'] = $user->name;
            $data['email'] = $user->email;   

            return ApiResponse::sendResponse(200, "Login Succcessfully", $data);

        } else {
            return ApiResponse::sendResponse(401, "User Undefined", null);
        }
    }
}






















// class LoginController extends Controller
// {
//      public function login(Request $request)
//     {
//         $validator = Validator::make($request->all(), [
//             'email' => ['required', 'email', 'max:255'],
//             'password' => ['required'],
//         ], [], [
//             'email' => 'Email',
//             'password' => 'Password'
//         ]);

//         if($validator-> fails()){
//             return ApiResponse::sendResponse(422, 'Login Validation Errors',
//                 $validator->errors());
//         }

//         if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
//             $user = Auth::user();
//             $data['token'] = $user->createToken('MyAuthApp')->plainTextToken;
//             $data['name'] = $user->name;
//             $data['email'] = $user->email;   

//             return ApiResponse::sendResponse(200, "Login Succcessfully", $data);

//         } else {
            
//             return ApiResponse::sendResponse(401, "User Undefined", null);
//         }
//     }
// }