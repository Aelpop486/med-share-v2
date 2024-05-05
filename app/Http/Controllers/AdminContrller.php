<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreAdminRequest;
use App\Models\admin;

class AdminContrller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia('admins/SystemUsers/index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('admins/SystemUsers/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdminRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData ['password'] = Hash::make($request->password);
        $admin = admin::create($validatedData);
        return to_route('admins.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(admin $admin)
    {
        return inertia('admins/SystemUsers/show',[
            'admin'=>$admin
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(admin $admin)
    {
        return inertia('admins/SystemUsers/edit',[
            'admin'=>$admin
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, admin $admin)
    {
        $validatedData = $request->validated();
        $admin->update($validatedData);
        return to_route('admins.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(admin $admin)
    {
        $admin->delete();
        return to_route('admins.index');
    }
}
