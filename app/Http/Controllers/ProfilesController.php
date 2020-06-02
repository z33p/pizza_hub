<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($user)
    {
        // TODO: If not find go to 404 page
        $user = User::where('username', $user)->first();

        return view('profiles.index', compact('user'));
    }
}
