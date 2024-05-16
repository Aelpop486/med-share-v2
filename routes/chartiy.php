<?php

use App\Http\Controllers\charities\CharityContactController;
use Inertia\Inertia;
use App\Models\charit;
use App\Models\donation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\charities\DonationController;
use App\Http\Controllers\charities\CharityUsersController;
use App\Models\Charity_users;
use App\Http\Controllers\charities\CharityProfileController;


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

Route::group(['middleware' => ['auth:charits']], function () {

    Route::get('/CharityDashboard', function () {
        $donation = donation::where('state', 'pending')->paginate(20);
        return Inertia::render('charities/dashboardView', [
            'donations' => $donation
        ]);
    })->name('CharityDashboard');

    Route::get('/DonationManagement', function () {
        $donations = donation::where(['state', '!=', 'pending'], ['charit_id', Auth::user()->id])->paginate(20);
        return Inertia::render('charities/DonationManagement/index', [
            'donations' => $donations
        ]);
    })->name('DonationManagement');

    Route::get('/CharityProfile', function () {
        $charity = charit::where("id", Auth::user()->id)->get();
        return Inertia::render('charities/CharityProfile/index', [
            'charity' => $charity
        ]);
    })->name('CharityProfile');

    Route::get('/CharityUsers', function () {
        $users = Charity_users::where('charity_id', Auth::user()->id)->paginate(10);
        return Inertia::render('charities/CharityUsers/index', [
            'users' => $users
        ]);
    })->name('CharityUsers');

    Route::get('/Help&Support', function () {
        return Inertia::render('charities/Help&Support/index');
    })->name('Help&Support');

    Route::get('/charitySettings', function () {
        return Inertia::render('charities/Settings/index');
    })->name('charitySettings');


    Route::post('contact', CharityContactController::class)->name('CharityContact.store');
    Route::resource('Charitydonations', DonationController::class);
    Route::resource('profile', CharityProfileController::class);
    Route::resource('Charityusers', CharityUsersController::class);
});


// Route::get('/CharityDashboard', function () {
//     return Inertia::render('charities/dashboardView');
// })->name('CharityDashboard');
// Route::get('/DonationManagement', function () {
//     return Inertia::render('charities/DonationManagement/index');
// })->name('DonationManagement');

// Route::get('/CharuityProfile', function () {
//     return Inertia::render('charities/CharityProfile/index');
// })->name('CharityProfile');

// Route::get('/CharityUsers', function () {
//     return Inertia::render('charities/CharityUsers/index');
// })->name('CharityUsers');
// Route::get('/Help&Support', function () {
//     return Inertia::render('charities/Help&Support/index');
// })->name('Help&Support');
// Route::get('/charitySettings', function () {
//     return Inertia::render('charities/Settings/index');
// })->name('charitySettings');

// ///////
// Route::get('/DonationProfile', function () {
//     return Inertia::render('charities/DonationManagement/edit');
// })->name('DonationProfile');





require __DIR__ . '/auth.php';
