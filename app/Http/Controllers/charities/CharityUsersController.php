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

class CharityUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Charity_users::where('charity_id', '=', Auth::user()->id)->get();
        return Inertia::render('charities/CharityUsers/index');
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
        return to_route('charityUsers');
    }

    /**
     * Display the specified resource.
     */
    public function show(Charity_users $charity_users)
    {
        return Inertia::render('charities/CharityUsers/show', [
            'charity_users' => $charity_users
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Charity_users $charity_users)
    {
        return Inertia::render('charities/CharityUsers/edit', [
            'charity_users' => $charity_users
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CharityUsersStoreRequset $request,Charity_users $charity_users)
    {
        $validatedData = $request->validated();
        if ($request->hasFile("image")) {
            $validatedData["image"] = ImageService::uploadImage($request->file("image"), "charity_users");
            ImageService::deleteImage($charity_users->image,);
        }
        $validatedData['password'] = Hash::make($request->password);
        $charity_users->update($validatedData);
        return to_route('charityUsers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Charity_users $charity_users)
    {
        $charity_users->delete();
        return to_route('charityUsers');
    }
}
