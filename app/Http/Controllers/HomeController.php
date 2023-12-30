<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = \App\Models\Product::latest()->where('published',true)->get();
        $testimonials = \App\Models\Testimonial::latest()->where('published',true)->get();
        return view('home',[
            'products' => $products,
            'testimonials' => $testimonials
        ]);
    }
}
