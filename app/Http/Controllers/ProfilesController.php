<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show($user)
    {
        // TODO: If not find go to 404 page
        $user = User::where('username', $user)->first();

        return view('profiles.show', compact('user'));
    }

    public function showCartProducts()
    {
        return auth()->user()->with('cart.products')->get()[0];
    }
}
