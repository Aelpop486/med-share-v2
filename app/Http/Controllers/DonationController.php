<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index(donation $donations)
    {
        $donations = donation::where('city_id', $donations->city_id)->with(['user','city'])->paginate(20);
        return Inertia::render('admins/Donations/index',[
            'donations'=>$donations
        ]);
    }

    public function edit(Request $request)
    {
        $donation = donation::find($request->id)->with(['images','address','city','charity','user'])->get();
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
