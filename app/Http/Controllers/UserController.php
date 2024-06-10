<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Services\ImageService;
use App\Http\Requests\UserStoreRequest;

class UserController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        return Inertia::render('admins/Users/create');
    }

    public function store(UserStoreRequest $request)
    {
        $validatedData = $request->validated();
        if ($request->hasFile("image")) {
            $validatedData["image"] = ImageService::uploadImage($request->file("image"), "users");
        }
        $user = User::create($validatedData);
        return back()->with('success', 'User created successfully');
    }

    public function edit(Request $request)
    {
        $user = User::find($request->id)->with(['addresses','donations'])->get();
        return Inertia::render('admins/Users/edit', [
            'user' => $user
        ]);
    }

    public function update(UserStoreRequest $request, User $user)
    {
        $validatedData = $request->validated();
        if ($request->hasFile("image")) {
            $validatedData["image"] = ImageService::uploadImage($request->file("image"), "users");
        }
        $user->update($validatedData);
        return back()->with('success', 'User updated successfully');
    }


    public function destroy(User $user)
    {
        $user->delete();
        return to_route('users')->with('success', 'User deleted successfully');
    }
}
