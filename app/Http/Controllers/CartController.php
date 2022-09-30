<?php

namespace App\Http\Controllers;

use App\Models\Cart_cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->cart_id);
        // $create = ['cart_id' => $request->cart_id];
        $data = $request->validate([
            'cart_id'                  =>  'required',
        ]);
        // $data['tags'] = implode(",", $request->tags);
        // $data['tags'] = json_encode($request->tags);
        $data['cart_id'] = json_encode($request->cart_id);
        $post = Cart_cart::create($data);

        return back();
    }
}
