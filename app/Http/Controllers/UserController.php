<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\ImageService;
use App\Http\Requests\UserStoreRequest;

class UserController extends Controller
{

    public function index()
    {
        $user = User::paginate(20); 
        return inertia('admins/Users/index', [
            'users' => $user
        ]);
    }

    public function create()
    {
        return inertia('admins/Users/create');
    }

    public function store(UserStoreRequest $request)
    {
        $validatedData = $request->validated();
        if ($request->hasFile("image")) {
            $validatedData["image"] = ImageService::uploadImage($request->file("image"), "users");
        }
        $user = User::create($validatedData);
        return to_route('users.index');
    }

    public function show(User $user)
    {
        return inertia('admins/Users/show', [
            'user' => $user
        ]);
    }

    public function edit(User $user)
    {
        return inertia('admins/Users/edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validated();
        if ($request->hasFile("image")) {
            $validatedData["image"] = ImageService::uploadImage($request->file("image"), "users");
            ImageService::deleteImage($user->image,);
        }
        $user->update($validatedData);
        return to_route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return to_route('users.index');
    }
}
