<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index(Request $request)
    {
        $donations = donation::where('city_id', $request->city_id)->with(['user'])->paginate(20);
        // dd($donations);
        return Inertia::render('admins/Donations/index',[
            'donations'=>$donations
        ]);
    }

    public function show(donation $donation)
    {
        return Inertia::render('admins/Donations/show',[
            'donation'=>$donation
        ]);
    }

    public function edit(donation $donation)
    {
        return Inertia::render('admins/Donations/edit',[
            'donation'=>$donation
        ]);
    }

    public function destroy(donation $donation)
    {
        $donation->delete();
        return to_route('govDonations')->with('success', 'Donation deleted successfully');
    }

}
