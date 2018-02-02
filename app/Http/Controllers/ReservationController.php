<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TableType;
use App\Table;

class ReservationController extends Controller
{
    public function create()
    {
        $tables = Table::all();
        return view('reservation-create',compact('tables'));
    }

    public function next(Request $request){
        return $request;
    }
}
