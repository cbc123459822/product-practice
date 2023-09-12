<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function cart_delivery () {
        return view('cart_sop.delivery');
    }
}
