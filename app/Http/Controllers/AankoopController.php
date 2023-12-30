<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Termwind\render;

class AankoopController extends Controller
{
    public function index(){
        return view("aankoop");
    }
}
