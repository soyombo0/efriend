<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserService
{
    public function updateUser(Request $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);
        return $user;
    }

    public function storePic(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('public/profile_pictures', $filename);

            $user = auth()->user();
            $user->img = Storage::url($path);
            $user->save();

            return $user->img;
        }

        return null;
    }
}
