<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FriendController extends Controller
{
    public function index()
    {
        return Inertia::render('Friends');
    }

    public function users()
    {
        $users = User::latest()->get();

        return Inertia::render('Users', [
            'users' => $users
        ]);
    }
}
