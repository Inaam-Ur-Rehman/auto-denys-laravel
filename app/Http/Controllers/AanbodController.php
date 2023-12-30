<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AanbodController extends Controller
{
    public function index()
    {

        $products = \App\Models\Product::all();
        return view('aanbod', [
            'products' => $products,
        ]);
    }
}
