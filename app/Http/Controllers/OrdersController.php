<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store()
    {
        $user = auth()->user();

        $user->orders()->create([]);

        return redirect('/profiles/' . $user->username);
    }
}
