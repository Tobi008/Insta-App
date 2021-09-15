<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    //
    public function index(User $user)
    { 
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id): false;

        $time = now()->addSeconds(30);
        $postCount = Cache::remember('count.posts'. $user->id, $time, function () use($user) {
            return $user->posts->count();
        });;
        $followersCount = Cache::remember('count.followers'. $user->id, $time, function () use($user) {
            return $user->profile->followers->count();
        });;
        $followingCount = Cache::remember('count.following'. $user->id, $time, function () use($user) {
            return  $user->Following->count();;
        });;

        return view('profiles.index', [
            'user' => $user,
            'follows' => $follows,
            'postCount' => $postCount,
            'followersCount' => $followersCount,
            'followingCount' => $followingCount
        ]);
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);
        return view('profiles.edit', [
            'user' => $user,
        ]);
    }
    public function update(User $user)
    {
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' => 'required',
            'bio' => 'required',
            'url' => 'url',
            'image' => '',
        ]);

        if(request('image')){
            $imagePath = request('image')->store('profile','public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
            $image->save();

            $arr = ['image' => $imagePath];

        }

        auth()->user()->profile->update(array_merge(
            $data, 
            $arr ?? [],
        ));

       

        return redirect("/profile/{$user->id}");
    }
}
