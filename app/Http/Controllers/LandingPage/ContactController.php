<?php

namespace App\Http\Controllers\landingPage;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(ContactController $request)
    {
        $validatedData = $request->validated();
        $message = Contact::create($validatedData);
        return back()->with('success', 'Message sent successfully');
    }
}
