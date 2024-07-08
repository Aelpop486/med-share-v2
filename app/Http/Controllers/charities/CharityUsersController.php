<?php

namespace App\Http\Controllers\charities;

use Inertia\Inertia;
use App\Models\charit;
use Illuminate\Http\Request;
use App\Models\Charity_users;
use App\Services\ImageService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\CharityUsersStoreRequset;
use App\Http\Requests\CharityUsersUpdateRequset;

class CharityUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('charities/CharityUsers/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CharityUsersStoreRequset $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile("image")) {
            $validatedData["image"] = ImageService::uploadImage($request->file("image"), "charity_users");
        }
        $validatedData['charity_id'] = Auth::user()->id;
        $validatedData['password'] = Hash::make($request->password);
        $user = Charity_users::create($validatedData);
        return back()->with('success', 'User created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Charity_users $Charityuser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Charity_users $Charityuser)
    {
        // dd($Charityuser);
        return Inertia::render('charities/CharityUsers/edit', [
            'charity_users' => $Charityuser
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CharityUsersUpdateRequset $request,Charity_users $Charityuser)
    {
        $validatedData = $request->validated();
        if ($request->hasFile("image")) {
            $validatedData["image"] = ImageService::uploadImage($request->file("image"), "charity_users");
            ImageService::deleteImage($Charityuser->image,);
        }
        $validatedData['password'] = Hash::make($request->password);
        $Charityuser->update($validatedData);
        return back()->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Charity_users $Charityuser)
    {
        $Charityuser->delete();
        return back()->with('success', 'User deleted successfully');
    }
}
