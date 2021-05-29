<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class productcontroller extends Controller
{
    function index()
    {
        $data=product::all();
        return view('product',['products'=>$data]);
    }
}
