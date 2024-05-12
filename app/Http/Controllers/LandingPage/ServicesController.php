<?php

namespace App\Http\Controllers\LandingPage;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\charit;

class ServicesController extends Controller
{
    public function index()
    {
        return Inertia::render('LandingPage/Contact');
    }

    public function store(Request $request)
    {
        // $validatedData = $request->validated();
        // $message = charit::create($validatedData);
        // return to_route('Contact');
    }
}
