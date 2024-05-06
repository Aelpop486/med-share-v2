<?php

namespace App\Http\Controllers;

use App\Models\donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index()
    {
        $donations = donation::paginate(10);
        return inertia('admins/Donations/index',[
            'donations'=>$donations
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(donation $donation)
    {
        return inertia('admins/Donations/show',[
            'donation'=>$donation
        ]);
    }

    public function edit(donation $donation)
    {
        return inertia('admins/Donations/edit',[
            'donation'=>$donation
        ]);
    }

    public function update(Request $request, donation $donation)
    {
        //
    }

    public function destroy(donation $donation)
    {
        $donation->delete();
        return to_route('donations.index');
    }

}
