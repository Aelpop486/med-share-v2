<?php

namespace App\Http\Controllers\landingPage;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactStoreRequest;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(ContactStoreRequest $request)
    {
        $validatedData = $request->validated();
        // dd($validatedData);
        $message = Contact::create($validatedData);
        return back()->with('success', 'Message sent successfully');
    }
}
