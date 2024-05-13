<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddressApiStoreRequest;
use App\Http\Requests\AddressApiUpdateRequest;
use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = $request->user();
        return response()->json([
            'success' => true,
            'data' => $user->addresses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddressApiStoreRequest $request)
    {
        $user = $request->user();
        $validatedData = $request->validated();
        $address = $user->addresses()->create($validatedData);
        return response()->json(['success' => true, 'data' => $address]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Address $address)
    {
        return response()->json(['success' => true, 'data' => $address]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Address $address)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AddressApiUpdateRequest $request, Address $address)
    {
        $address->update($request->validated());
        return response()->json(['success' => true, 'data' => $address]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Address $address)
    {
        $address->delete();
        return response()->json(['success' => true]);
    }
}
