<?php

namespace App\Http\Controllers\LandingPage;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\specialty;

class ServicesController extends Controller
{
    public function index()
    {
        $specialties = specialty::all();
        return Inertia::render('LandingPage/Services', [
            'specialties' => $specialties
        ]);
    }
}
