<?php

use App\Http\Controllers\CartController;
use App\Models\Cart;
use App\Models\Cart_cart;
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
    $cart = Cart::all();
    $cart_cart = Cart_cart::with('cart')->get();
    $collection = collect($cart_cart);
//    $tes = $cart_cart['cart_id'];
    // dd($cart_cart);
    return view('welcome', compact('cart', 'cart_cart', 'collection'));
});

Route::post('/store' , [CartController::class, 'store']);