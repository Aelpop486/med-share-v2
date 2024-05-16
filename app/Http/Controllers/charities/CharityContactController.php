<?php

namespace App\Http\Controllers\charities;

use Illuminate\Http\Request;
use App\Models\Charity_Contact;
use App\Http\Controllers\Controller;
use App\Http\Requests\CharityContactStoreRequest;
use Illuminate\Support\Facades\Auth;

class CharityContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(CharityContactStoreRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['charity_id'] = Auth::user()->id;
        $message = Charity_Contact::create($validatedData);
        return back()->with('success', 'Your message has been sent successfully.');
    }
}
