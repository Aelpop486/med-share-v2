<?php

namespace App\Http\Controllers\charities;

use Inertia\Inertia;
use App\Models\charit;
use Illuminate\Http\Request;
use App\Services\ImageService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CharityStoreRequest;
use App\Http\Requests\CharityUpdateRequest;

class CharityProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CharityUpdateRequest $request, charit $charity)
    {
        $validatedData = $request->validated();
        if ($request->hasFile("image")) {
            $validatedData["image"] = ImageService::uploadImage($request->file("image"), "charities");
            ImageService::deleteImage($charity->image,);
        }
        $charity->update($validatedData);
        return back()->with('success', 'Charity profile updated successfully');
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
