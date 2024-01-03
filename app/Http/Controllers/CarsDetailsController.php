<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CarsDetailsController extends Controller
{
    // fetch data from database using slug
    public function index($slug)
    {
        $car = Product::where('slug', $slug)->firstOrFail();

        // related cars
        $relatedCars = Product::where('slug', '!=', $slug)->inRandomOrder()->take(6)->get();

        return view('wagens/car-details', compact('car', 'relatedCars'));
    }
}
