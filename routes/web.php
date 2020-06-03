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

Route::post('/carts/push/product', 'CartsController@push')->name('carts.push');

Route::get('/home', 'HomeController@show');

Route::get('/profiles/{user}', 'ProfilesController@show')->name('profiles.show');

Auth::routes();
