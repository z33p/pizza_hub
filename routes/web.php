<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@show');

Route::get('/profiles/{user}', 'ProfilesController@show')->name('profiles.show');
Route::get('/profiles/cart/products', 'ProfilesController@showCartProducts')->name('profiles.showCartProducts');

Route::post('/carts/push/product', 'CartsController@push')->name('carts.push');

Route::post('/orders', 'OrdersController@store')->name('orders.store');

Route::get('/products', 'ProductsController@index')->name('products.index');
