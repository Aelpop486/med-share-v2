<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\charities\DonationController;
use App\Http\Controllers\charities\CharityProfileController;
use App\Http\Controllers\charities\CharityDashboardController;
use App\Http\Controllers\charities\CharityUsersController;


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

///////
Route::get('/DonationProfile', function () {
    return Inertia::render('charities/DonationManagement/edit');
})->name('DonationProfile');


//  belongs to backend
// Route::middleware('auth:charits')->controller(DonationController::class)->group(function () {
//     Route::get('/DonationManagement', 'index')->name('DonationManagement');
//     Route::get('/Donation/show/{id}','edit')->name('ShowDonation');
//     Route::post('/Donation/show/{id}','update')->name('UpdateDonation');
// });
// ##################################################################################################
// Route::middleware('auth:charits')->controller(CharityProfileController::class)->group(function () {
//     Route::get('/charityProfile', 'index')->name('charityProfile');
//     Route::get('/charityProfile/show/{id}','edit')->name('ShowCharityProfile');
//     Route::post('/charityProfile/show/{id}','update')->name('UpdateCharityProfile');
//     Route::get('/charityProfile/delete/{id}','destroy')->name('DeleteCharityProfile');
// });
// ##################################################################################################
// Route::middleware('auth:charits')->controller(CharityUsersController::class)->group(function () {
//     Route::get('/CharityUsers', 'index')->name('CharityUsers');
//     Route::get('/CharityUsers/create', 'create')->name('CreateCharityUsers');
//     Route::post('/CharityUsers/create', 'create')->name('StoreCharityUsers');
//     Route::get('/CharityUsers/show/{id}','edit')->name('ShowCharityUsers');
//     Route::post('/CharityUsers/show/{id}','update')->name('UpdateCharityUsers');
//     Route::get('/CharityUsers/delete/{id}','destroy')->name('DeleteCharityUsers');
// });
// ##################################################################################################
// Route::middleware('auth:adminss')->get('/CharityDashboard',CharityDashboardController::class)->name('CharityDashboard');



require __DIR__.'/auth.php';
