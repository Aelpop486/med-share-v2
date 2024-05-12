<?php

namespace App\Http\Controllers\LandingPage;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactStoreRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return Inertia::render('LandingPage/Contact');
    }

    public function store(ContactStoreRequest $request)
    {
        $validatedData = $request->validated();
        $message = Contact::create($validatedData);
        return to_route('Contact');
    }
}
