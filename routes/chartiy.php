<?php

use App\Http\Controllers\ProfileController;
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
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
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


// test login
Route::get('/test/chartiy', function () {
    return view('test-chartiy');
})->name('test.chartiy');

require __DIR__.'/auth.php';
