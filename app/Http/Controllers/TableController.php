<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function create()
    {
        return view('table-create');
    }


    public function index()
    {
        return view('table-index');
    }
}
