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




//     Route::get('/home', function () {
//         return Inertia::render('admins/home');
//     })->name('home');


//     Route::get('/ListgovDonations', function () {
//         return Inertia::render('admins/Donations/index');
//     })->name('ListgovDonations');


//     Route::get('/govDonations', function () {
//         return Inertia::render('admins/Donations/governments');
//     })->name('govDonations');

// });


// test login
Route::get('/test/chartiy', function () {
    return view('test-chartiy');
})->name('test.chartiy');

require __DIR__.'/auth.php';
