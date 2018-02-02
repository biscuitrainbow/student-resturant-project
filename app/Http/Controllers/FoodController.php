<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function create()
    {
        return view('food-create');
    }

    public function index()
    {
        return view('food-index');
    }
}
