<?php

namespace App\Http\Controllers\charities;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CharityProfileController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $charity = Auth::user();
        return Inertia::render('charities/profileView', [
            'charity' => $charity
        ]);
    }
}
