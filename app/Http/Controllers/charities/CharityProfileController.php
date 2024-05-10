<?php

namespace App\Http\Controllers\charities;

use Inertia\Inertia;
use App\Models\charit;
use Illuminate\Http\Request;
use App\Services\ImageService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CharityStoreRequest;

class CharityProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $charity = charit::where("id", Auth::user()->id)->get();
        return Inertia::render('charities/CharityProfile/index', [
            'charity' => $charity
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(charit $charity)
    {
        return Inertia::render('charities/CharityProfile/edit', [
            'charity' => $charity
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CharityStoreRequest $request, charit $charity)
    {
        $validatedData = $request->validated();
        if ($request->hasFile("image")) {
            $validatedData["image"] = ImageService::uploadImage($request->file("image"), "charities");
            ImageService::deleteImage($charity->image,);
        }
        $charity->update($validatedData);
        return to_route("charities.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(charit $charity)
    {
        $charity->delete();
        return to_route("login");
    }
}
