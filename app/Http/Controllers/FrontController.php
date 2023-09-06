<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function test(Request $request)
    {
        dd($request->all());
        return view('test');
    }
    public function fetchTest(Request $request)
    {
        dd($request->all());
    }
}
