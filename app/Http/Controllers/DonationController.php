<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index(Request $request)
    {
        $donations = donation::where('city_id', $request->city_id)->with(['user','city'])->paginate(20);
        return Inertia::render('admins/Donations/index',[
            'donations'=>$donations
        ]);
    }

    public function edit(donation $donation)
    {
        donation::with(['images','address','city','charity','user'])->get();
        return Inertia::render('admins/Donations/edit',[
            'donation'=>$donation
        ]);
    }

    public function destroy(donation $donation)
    {
        dd($donation);
        $donation->delete();
        return to_route('admins.donations.index')->with('success', 'Donation deleted successfully');
    }

}
