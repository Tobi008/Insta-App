<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    //
    public function index(User $user)
    { 
        return view('profiles.index', [
            'user' => $user
        ]);
    }

    public function edit(User $user)
    {
        return view('profiles.edit', [
            'user' => $user,
        ]);
    }
    public function update(User $user)
    {
        $data = request()->validate([
            'title' => 'required',
            'bio' => 'required',
            'url' => 'url',
            'image' => '',
        ]);

        auth()->user()->profile->update($data);

        return redirect("/profile/{$user->id}");
    }
}
