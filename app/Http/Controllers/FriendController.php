<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class FriendController extends Controller
{
    public function index()
    {
        $following = Auth::user()->following()->with('friend')->get();

        return Inertia::render('Friends', [
            'following' => $following
        ]);
    }

    public function users()
    {
        $users = User::latest()->get();

        return Inertia::render('Users', [
            'users' => $users
        ]);
    }

    public function follow(User $user)
    {
        $follow = Friend::updateOrCreate(
            [
                //two colums to check with
                'user_id' => Auth::user()->id,
                'friend_id' => $user->id
            ]
        );

        return back();
    }
}
