<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompleteController extends Controller
{
    public function cart_complete(){
        return view('cart_sop.complete');
    }
}
