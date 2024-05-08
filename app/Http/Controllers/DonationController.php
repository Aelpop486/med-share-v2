<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index()
    {
        $donations = donation::paginate(10);
        return Inertia::render('admins/Donations/governments',[
            'donations'=>$donations
        ]);
    }


    public function show(String $id)
    {
        return Inertia::render('admins/Donations/index',[
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
        return to_route('govDonations');
    }

}
