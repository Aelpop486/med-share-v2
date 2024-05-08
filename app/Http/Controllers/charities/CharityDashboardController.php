<?php

namespace App\Http\Controllers\charities;

use Inertia\Inertia;
use App\Models\donation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CharityDashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $donation = donation::all();
        return Inertia::render('charities/dashboardView', [
            'donations' => $donation
        ]);
    }
}
