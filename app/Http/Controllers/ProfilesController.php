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
        $user = User::where('username', $user)->first();
        // TODO: If not find go to 404 page

        return view('profile', [
            'user' => $user,
        ]);
    }
}
