<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function cart_payment(){
        return view('cart_sop.payment');
    }
}
