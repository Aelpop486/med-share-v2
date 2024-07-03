<?php

namespace App\Http\Controllers;

use App\Models\charit;
use App\Models\specialty;
use Illuminate\Http\Request;
use App\Services\ImageService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\CharityStoreRequest;
use Inertia\Inertia;

class CharitController extends Controller
{

    public function create()
    {
        $specialty = specialty::all();
        return Inertia::render('admins/Charity/create',[
            'specialty' => $specialty
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CharityStoreRequest $request)
    {
        $validatedData = $request->validated();
        if ($request->hasFile("image")) {
            $validatedData["image"] = ImageService::uploadImage($request->file("image"), "charities");
        }
        $validatedData["password"] = Hash::make($request->password);
        $validatedData["admin_id"] = Auth::user()->id;
        $charity = charit::create($validatedData);
        return back()->with('success', 'Charity created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(charit $charity)
    {
        $charity->load(['specialty','users','admin']);
        // dd($charity);
        $specialty = specialty::all();
        return Inertia::render('admins/Charity/edit',[
            'charity'=>$charity,
            'specialty' => $specialty
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CharityStoreRequest $request,charit $charity)
    {
        $validatedData = $request->validated();
        dd($validatedData);
        if ($request->hasFile("image")) {
            $validatedData["image"] = ImageService::uploadImage($request->file("image"), "charities");
            ImageService::deleteImage($charity->image);
        }
        $validatedData['password'] = Hash::make($request->password);
        $charity->update($validatedData);
        return back()->with('success', 'Charity updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(charit $charity)
    {
        $charity->delete();
        return to_route('admins.charities')->with('success', 'Charity deleted successfully');
    }
}
