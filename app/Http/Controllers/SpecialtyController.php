<?php

namespace App\Http\Controllers;

use App\Models\specialty;
use Illuminate\Http\Request;
use App\Services\ImageService;
use App\Http\Requests\SpecialityStoreRequest;
use App\Models\charit;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class SpecialtyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specialties = specialty::paginate(10);
        return Inertia::render('admins/specialties/majors', [
            'specialties' => $specialties
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('admins/specialties/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SpecialityStoreRequest $request)
    {
        $validatedData = $request->validated();
        if ($request->hasFile("image")) {
            $validatedData["image"] = ImageService::uploadImage($request->file("image"), "charities");
        }
        $validatedData["admin_id"] = Auth::user()->id;
        $specialty = specialty::create($validatedData);
        return to_route('specialties');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $charities = charit::where('specialty_id', $id)->paginate(10);
        return Inertia::render('admins/specialties/index', [
            'charities' => $charities
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(specialty $specialty)
    {
        return Inertia::render('admins/specialties/edit', [
            'specialty' => $specialty
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SpecialityStoreRequest $request, specialty $specialty)
    {
        $validatedData = $request->validated();
        if ($request->hasFile("image")) {
            $validatedData["image"] = ImageService::uploadImage($request->file("image"), "spacialties");
            ImageService::deleteImage($specialty->image,);
        }
        $specialty->update($validatedData);
        return to_route('specialties');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(specialty $specialty)
    {
        $specialty->delete();
        return to_route('specialties');
    }
}
