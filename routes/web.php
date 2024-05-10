<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CharitController;
use App\Http\Controllers\DonationController;
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

Route::get('UsersTable/create', function () {
    return Inertia::render('admins/Users/create');
})->name('createUser');

Route::get('SystemUsersTable/create', function () {
    return Inertia::render('admins/SystemUsers/create');
})->name('createSystemUser');

// -----Create END---


//  belongs to backend //

// Route::middleware('auth')->controller(AdminController::class)->group(function () {
//     Route::get('systemUsers', 'index')->name('systemUsers');
//     Route::get('SystemUsersTable/create', 'create')->name('createSystemUser');
//     Route::post('SystemUsersTable/create', 'store')->name('storeSystemUser');
//     Route::get('systemUsersTable/show', 'edit')->name('showSystemUser');
//     Route::post('systemUsersTable/create', 'update')->name('updateSystemUser');
//     Route::get('charityTable/delete', 'destroy')->name('deleteSystemUser');
// });
// Route::middleware('auth')->controller(CharitController::class)->group(function () {
//     Route::get('charities','index')->name('charities');
//     Route::get('charityTable/create','create')->name('createCharity');
//     Route::post('charityTable/create','store')->name('storeCharity');
//     Route::get('charityTable/show','edit')->name('showCharity');
//     Route::post('charityTable/show','store')->name('updateCharity');
//     Route::get('charityTable/delete','destroy')->name('deleteCharity');
// });
// Route::middleware('auth')->controller(DonationController::class)->group(function () {
//     Route::get('govDonations','index')->name('govDonations');
//     Route::get('ListgovDonations','show')->name('ListgovDonations');
//     Route::get('ListgovDonations/show','edit')->name('showDonation');
//     Route::get('ListgovDonations/delete','destroy')->name('deleteDonation');
// });
// Route::middleware('auth')->controller(UserController::class)->group(function () {
//     Route::get('users','index')->name('users');
//     Route::get('UsersTable/create','create')->name('createUser');
//     Route::post('UsersTable/create','store')->name('storeUser');
//     Route::get('UsersTable/show','edit')->name('showUser');
//     Route::post('UsersTable/show','update')->name('updateUser');
//     Route::get('UsersTable/delete','destroy')->name('deleteUser');
// });
// Route::middleware('auth')->controller(SpecialtyController::class)->group(function () {
//     Route::get('specialties','index')->name('specialties');
//     Route::get('specialties/majors/create','create')->name('createSpecialtie');
//     Route::post('specialties/majors/create','store')->name('storeSpecialtie');
//     Route::get('ListspecCharities','show')->name('ListspecCharities');
//     Route::get('specialties/majors/show','edit')->name('showSpecialtie');
//     Route::post('specialties/majors/show','update')->name('updateSpecialtie');
//     Route::get('specialties/majors/delete','destroy')->name('deleteSpecialtie');
// });


// Route::middleware('auth')->get('/dashboardView',AdminDashboardController::class)->name('dashboardView');



// Linding Page

Route::get('/about', function () {
    return Inertia::render('LandingPage/About');
})->name('About');

Route::get('/pages', function () {
    return Inertia::render('LandingPage/pages');
})->name('pages');


Route::get('/Contact', function () {
    return Inertia::render('LandingPage/Contact');
})->name('Contact');

Route::get('/Services', function () {
    return Inertia::render('LandingPage/Services');
})->name('Services');

Route::get('/privacy', function () {
    return Inertia::render('LandingPage/Privacy');
})->name('Privacy');


require __DIR__ . '/auth.php';
