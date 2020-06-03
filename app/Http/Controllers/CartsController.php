<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function push()
    {
        $cart = Auth()->user()->cart;

        $productId = request()->input('productId');

        // TODO: Add error handling
        $cart->products()->attach($productId);

        return compact('productId');
    }
}
