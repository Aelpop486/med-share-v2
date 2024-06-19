<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\LogoutController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\DeleteAccountController;
use App\Http\Controllers\Api\ResetPasswordController;
use App\Http\Controllers\Api\doniatonsApis\DonationController;
use App\Http\Controllers\Api\ProfileController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//           ---          Auth           ---

Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LogoutController::class, 'logout'])->middleware('auth:sanctum');
Route::post('/delete', [DeleteAccountController::class, 'deleteAccount']);
Route::post('/password/reset', [ResetPasswordController::class, 'resetPassword']);


//         ---          Profile           ---

Route::group(['middleware' => ['auth:users'], 'as' => 'users.'], function () {
    Route::get('/profile', [ProfileController::class, 'getProfile']);
    Route::put('/profile', [ProfileController::class, 'updateProfile']);
    Route::get('/addNewImage', [DonationController::class,'addNewImage']);
    Route::post('/deleteImage', [DonationController::class,'deleteImage']);


    //         ---          Donations           ---
    Route::apiResource('/donations', DonationController::class);
    Route::apiResource('/addresses', AddressController::class);
});





























// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::controller(AuthController::class)->group(function(){
//     Route::post('/register','register');
//     Route::post('/login', 'login');
//     Route::post('/logout', 'logout');
//     Route::post('/delete', 'deleteAccount');
//     Route::post('/password/reset','resetPassword');
// });
//         ---          Donations           ---
//Route::apiResource('/donations', DonationController::class);
