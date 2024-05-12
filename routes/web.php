<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CharitController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\LandingPage\AboutController;
use App\Http\Controllers\LandingPage\ContactController;
use App\Http\Controllers\LandingPage\PageController;
use App\Http\Controllers\LandingPage\PrivacyController;
use App\Http\Controllers\LandingPage\ServicesController;
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

Route::get('/charityTable/create', function () {
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

//////////////////////////////////////////////////////////////////////////////////////////////////
//  belongs to backend //
// admin controller //
// Route::middleware('auth:admins')->controller(AdminController::class)->group(function () {
//     Route::get('systemUsers', 'index')->name('systemUsers');
//     Route::get('SystemUsersTable/create', 'create')->name('createSystemUser');
//     Route::post('SystemUsersTable/create', 'store')->name('storeSystemUser');
//     Route::get('systemUsersTable/show/{id}', 'edit')->name('showSystemUser');
//     Route::post('systemUsersTable/show/{id}', 'update')->name('updateSystemUser');
//     Route::get('charityTable/delete/{id}', 'destroy')->name('deleteSystemUser');
// });
//////////////////////////////////////////////////////////////////////////////////////////////////
// charity controller //
// Route::middleware('auth:admins')->controller(CharitController::class)->group(function () {
//     Route::get('charities','index')->name('charities');
//     Route::get('charityTable/create','create')->name('createCharity');
//     Route::post('charityTable/create','store')->name('storeCharity');
//     Route::get('charityTable/show/{id}','edit')->name('showCharity');
//     Route::post('charityTable/show/{id}','update')->name('updateCharity');
//     Route::get('charityTable/delete/{id}','destroy')->name('deleteCharity');
// });
//////////////////////////////////////////////////////////////////////////////////////////////////
// donation controller //
// Route::middleware('auth:admins')->controller(DonationController::class)->group(function () {
//     Route::get('govDonations','index')->name('govDonations');
//     Route::get('ListgovDonations/{id}','show')->name('ListgovDonations');
//     Route::get('ListgovDonations/show/{id}','edit')->name('showDonation');
//     Route::get('ListgovDonations/delete','destroy')->name('deleteDonation');
// });
//////////////////////////////////////////////////////////////////////////////////////////////////
// user controller //
// Route::middleware('auth:admins')->controller(UserController::class)->group(function () {
//     Route::get('users','index')->name('users');
//     Route::get('UsersTable/create','create')->name('createUser');
//     Route::post('UsersTable/create','store')->name('storeUser');
//     Route::get('UsersTable/show/{id}','edit')->name('showUser');
//     Route::post('UsersTable/show/{id}','update')->name('updateUser');
//     Route::get('UsersTable/delete/{id}','destroy')->name('deleteUser');
// });
//////////////////////////////////////////////////////////////////////////////////////////////////
// specialty controller //
// Route::middleware('auth:admins')->controller(SpecialtyController::class)->group(function () {
//     Route::get('specialties','index')->name('specialties');
//     Route::get('specialties/majors/create','create')->name('createSpecialtie');
//     Route::post('specialties/majors/create','store')->name('storeSpecialtie');
//     Route::get('ListspecCharities/{id}','show')->name('ListspecCharities');
//     Route::get('specialties/majors/show/{id}','edit')->name('showSpecialtie');
//     Route::post('specialties/majors/show/{id}','update')->name('updateSpecialtie');
//     Route::get('specialties/majors/delete/{id}','destroy')->name('deleteSpecialtie');
// });
//////////////////////////////////////////////////////////////////////////////////////////////////
// admin dashboard controller //
// Route::middleware('auth')->get('/dashboardView',AdminDashboardController::class)->name('dashboardView');
//////////////////////////////////////////////////////////////////////////////////////////////////
// contact controller //
// Route::controller(ContactController::class)->group(function () {
//     Route::get('/Contact', 'index')->name('Contact');
//     Route::post('/Contact', 'store')->name('StoreMessage');
// });
//////////////////////////////////////////////////////////////////////////////////////////////////
// services controller //
// Route::controller(ServicesController::class)->group(function () {
//     Route::get('/Services', 'index')->name('Services');
//     Route::post('/Services', 'store')->name('Store');
// });
//////////////////////////////////////////////////////////////////////////////////////////////////
// about controller //
// Route::get('/about',AboutController::class)->name('About');
//////////////////////////////////////////////////////////////////////////////////////////////////
// page controller //
// Route::get('/pages',PageController::class)->name('pages');
//////////////////////////////////////////////////////////////////////////////////////////////////
// privacy controller //
// Route::get('/privacy',PrivacyController::class)->name('Privacy');


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
