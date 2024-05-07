<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\charities\DonationController;
use App\Http\Controllers\charities\CharityProfileController;
use App\Http\Controllers\charities\CharityDashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('/CharityDashboard', function () {
    return Inertia::render('charities/dashboardView');
})->name('CharityDashboard');
Route::get('/DonationManagement', function () {
    return Inertia::render('charities/DonationManagement/index');
})->name('DonationManagement');

Route::get('/CharuityProfile', function () {
    return Inertia::render('charities/CharityProfile/index');
})->name('CharityProfile');

Route::get('/CharityUsers', function () {
    return Inertia::render('charities/CharityUsers/index');
})->name('CharityUsers');
Route::get('/Help&Support', function () {
    return Inertia::render('charities/Help&Support/index');
})->name('Help&Support');
Route::get('/charitySettings', function () {
    return Inertia::render('charities/Settings/index');
})->name('charitySettings');

Route::prefix('charities')->group(function () {
    Route::resource('donations',DonationController::class);
    Route::get('/charity/dashboardView',CharityDashboardController::class)->name('dashboardView');
    Route::get('/charity/dashboardView',CharityProfileController::class)->name('charity.profileView');
});


require __DIR__.'/auth.php';
