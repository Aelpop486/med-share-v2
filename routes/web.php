<?php

use App\Http\Controllers\AdminContrller;
use App\Http\Controllers\CharitController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpecialtyController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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


Route::middleware('auth')->group(function () {
    Route::resource('charities',CharitController::class);
    Route::resource('donations',DonationController::class);
    Route::resource('users',UserController::class);
    Route::resource('admins',AdminContrller::class);
    Route::resource('specialties',SpecialtyController::class);
});



Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::get('/dashboardView', function () {
    return Inertia::render('admins/dashboardView');
})->name('dashboardView');

Route::get('/govDonations', function () {
    return Inertia::render('admins/Donations/governments');
})->name('govDonations');

Route::get('/ListgovDonations', function () {
    return Inertia::render('admins/Donations/index');
})->name('ListgovDonations');

Route::get('/charities', function () {
    return Inertia::render('admins/Charity/index');
})->name('charities');

Route::get('/specialties', function () {
    return Inertia::render('admins/specialties/majors');
})->name('specialties');
Route::get('/ListspecCharities', function () {
    return Inertia::render('admins/specialties/index');
})->name('ListspecCharities');

Route::get('/users', function () {
    return Inertia::render('admins/Users/index');
})->name('users');

Route::get('/systemUsers', function () {
    return Inertia::render('admins/SystemUsers/index');
})->name('systemUsers');
Route::get('/adminsSettings', function () {
    return Inertia::render('admins/Settings/index');
})->name('adminsSettings');


// -----Index END---//


// Route::get('/dashboardView/show', function () {
//     return Inertia::render('admins/Dashboard/edit');
// })->name('showDashboardView');

Route::get('/ListgovDonations/show', function () {
    return Inertia::render('admins/Donations/edit');
})->name('showDonation');

Route::get('charityTable/show', function () {
    return Inertia::render('admins/Charity/edit');
})->name('showCharity');

Route::get('/specialties/majors/show', function () {
    return Inertia::render('admins/specialties/edit');
})->name('showSpecialtie');


Route::get('UsersTable/show', function () {
    return Inertia::render('admins/Users/edit');
})->name('showUser');

Route::get('SystemUsersTable/show', function () {
    return Inertia::render('admins/SystemUsers/edit');
})->name('showSystemUser');

// -----Show END---//


Route::get('/ListgovDonations/create', function () {
    return Inertia::render('admins/Donations/create');
})->name('createDonation');

Route::get('charityTable/create', function () {
    return Inertia::render('admins/Charity/create');
})->name('createCharity');

Route::get('/specialties/create', function () {
    return Inertia::render('admins/specialties/create');
})->name('createSpecialtie');

Route::get('/UsersTable/create', function () {
    return Inertia::render('admins/Users/create');
})->name('createUser');

Route::get('/SystemUsersTable/create', function () {
    return Inertia::render('admins/SystemUsers/create');
})->name('createSystemUser');

// -----Create END---
// -----------------------------



require __DIR__.'/auth.php';
