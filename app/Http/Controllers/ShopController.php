<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shopController extends Controller
{
    public function shop(){
        return view('cardshop');
    }

    public function delivery(){
        return view('delivery');
    }

    public function payment(){
        return view('payment');
    }

    public function thankyou(){
        return view('complete');
    }
}
