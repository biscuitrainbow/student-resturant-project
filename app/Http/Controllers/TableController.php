<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TableType;
use App\Table;
use Illuminate\Support\Facades\Auth;

class TableController extends Controller
{
    public function create()
    {
        $types =  TableType::all();
        return view('table-create',compact('types'));
    }

    public function store(Request $request){
        Table::create([
            'name' => $request->name,
            'seat' => $request->number_of_seat,
            'table_type_id' => $request->type,
            'user_id' => Auth::user()->id
        ]);

        return redirect('/table');
    }


    public function index()
    {
        $tables = Table::all();
        return view('table-index',compact('tables'));
    }
}
