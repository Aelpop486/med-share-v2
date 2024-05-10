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
        $donations = donation::where(['state','!=','pending'],['charit_id',Auth::user()->id])->paginate(20);
        return Inertia::render('charities/DonationManagement/index',[
            'donations' => $donations
        ]);
    }

    public function show(donation $donation)
    {
        return Inertia::render('charities/Donation/show',[
            'donation'=>$donation
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(donation $donation)
    {
        return Inertia::render('charities/Donation/edit',[
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
        return to_route('DonationManagement');
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
