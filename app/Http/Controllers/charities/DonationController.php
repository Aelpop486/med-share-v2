<?php

namespace App\Http\Controllers\charities;

use Inertia\Inertia;
use App\Models\donation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(donation $donation)
    {
        donation::with(['images','address','city','user'])->get();
        // dd($donation);
        return Inertia::render('charities/DonationManagement/edit',[
            'donation'=>$donation
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,donation $donation)
    {
        $validatedData = $request->validate([
           'state' => 'required|exists:donations,state',
        ]);
        $donation->update($validatedData);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(donation $donation)
    {
        $donation->delete();
        return to_route('DonationManagement');
    }
}
