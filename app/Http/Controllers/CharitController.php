<?php

namespace App\Http\Controllers;

use App\Http\Requests\CharityStoreRequest;
use App\Models\charit;
use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CharitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $charities = charit::paginate(10);
        return inertia('admins/Charity/index',[
            'charities' => $charities
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('admins/Charity/create');
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
        $chrity = charit::create($validatedData);
        return to_route("charities.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(charit $charity)
    {
        return inertia('admins/Charity/show',[
            'charity'=>$charity
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(charit $charity)
    {
        return inertia('admins/Charity/edit',[
            'charity'=>$charity
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,charit $charity)
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
        return to_route('charities.index');
    }
}
