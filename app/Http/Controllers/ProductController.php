<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = \App\Models\Product::latest()->where('is_published',true);
        return view('home',[
            'products' => $products
        ]);
    }


}
