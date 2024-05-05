<?php
namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\LogoutController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\DeleteAccountController;
use App\Http\Controllers\Api\ResetPasswordController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LogoutController::class, 'logout'])->middleware('auth:sanctum');
Route::post('/delete', [DeleteAccountController::class, 'deleteAccount']);
Route::post('/password/reset', [ResetPasswordController::class, 'resetPassword']);



// Route::controller(AuthController::class)->group(function(){
//     Route::post('/register','register');
//     Route::post('/login', 'login');
//     Route::post('/logout', 'logout');
//     Route::post('/delete', 'deleteAccount');
//     Route::post('/password/reset','resetPassword');
// });







