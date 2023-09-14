<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cart_step01 (){
        $carts = Cart::where('user_id', '=', Auth::user()->id)->get();
        // return view('cart_sop.cardshop', [ 'carts' => $carts ]);
        return view('cart_sop.cardshop', compact('carts'));
    }
}
