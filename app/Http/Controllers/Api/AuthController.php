<?php

namespace App\Http\Controllers\Api;

//use Illuminate\Foundation\Auth\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Response;
use App\Http\Helpers\ApiResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ], [], [
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password'
        ]);

        if($validator-> fails()){
            return ApiResponse::sendResponse(422, 'Register Validation Errors',
                $validator->messages()->all());
        }

        $user = User::create([
            'name' => $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
        ]);

        $data['token'] = $user->createToken('token_created')->plainTextToken;
        $data['name'] = $user->name;
        $data['email'] = $user->email;

        return ApiResponse::sendResponse(201, "User Account Created Succcessfully", $data);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required'],
        ], [], [
            'email' => 'Email',
            'password' => 'Password'
        ]);

        if($validator-> fails()){
            return ApiResponse::sendResponse(422, 'Login Validation Errors',
                $validator->errors());
        }

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $data['token'] = $user->createToken('MyAuthApp')->plainTextToken;
            $data['name'] = $user->name;
            $data['email'] = $user->email;
            $data['image'] = $user->image;

            return ApiResponse::sendResponse(200, "Login Succcessfully", $data);

        } else {

            return ApiResponse::sendResponse(401, "User Undefined", null);
        }
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return ApiResponse::sendResponse(200, 'Logged Out Successfully');
    }

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

        // Update the user's password
        $user->password = Hash::make($request->password);
        $user->save();

        return ApiResponse::sendResponse(200, 'Password Reset Successfully');
    }
}





    // public function forgotPassword(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'email' => ['required', 'email', 'max:255'],
    //     ], [], [
    //         'email' => 'Email',
    //     ]);

    //     if ($validator->fails()) {
    //         return ApiResponse::sendResponse(422, 'Validation Errors', $validator->errors());
    //     }

    //     $user = User::where('email', $request->email)->first();

    //     if (!$user) {
    //         return ApiResponse::sendResponse(404, 'User not found');
    //     }

    //     $token = Str::random(60);

    //     DB::table('password_resets')->updateOrInsert(
    //         ['email' => $user->email],
    //         ['email' => $user->email, 'token' => Hash::make($token), 'created_at' => now()]
    //     );

    //     // Send reset password email to user
    //     $user->sendPasswordResetNotification($token);

    //     return ApiResponse::sendResponse(200, 'Password reset email sent successfully');
    // }

    // public function resetPassword(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'email' => ['required', 'email', 'max:255'],
    //         'token' => ['required'],
    //         'password' => ['required', 'confirmed', Rules\Password::defaults()],
    //         'password_confirmation' => ['required'],
    //     ], [], [
    //         'email' => 'Email',
    //         'token' => 'Token',
    //         'password' => 'New Password',
    //         'password_confirmation' => 'Password Confirmation'
    //     ]);

    //     if ($validator->fails()) {
    //         return ApiResponse::sendResponse(422, 'Validation Errors', $validator->errors());
    //     }

    //     $reset = DB::table('password_resets')->where('email', $request->email)->first();

    //     if (!$reset || !Hash::check($request->token, $reset->token)) {
    //         return ApiResponse::sendResponse(401, 'Invalid password reset token');
    //     }

    //     $user = User::where('email', $request->email)->first();

    //     if (!$user) {
    //         return ApiResponse::sendResponse(404, 'User not found');
    //     }

    //     // Update user's password
    //     $user->password = Hash::make($request->password);
    //     $user->save();

    //     // Delete the password reset token
    //     DB::table('password_resets')->where('email', $user->email)->delete();

    //     return ApiResponse::sendResponse(200, 'Password reset successfully');
    // }



