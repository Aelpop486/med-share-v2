<?php

namespace App\Http\Controllers;

use App\Models\donation;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = User::latest()->take(10)->get();
        $donation = donation::latest()->take(10)->get();
        return Inertia::render('admins/Dashboard/dashboardView', [
            'users' => $user,
            'donations' => $donation
        ]);
    }
}
