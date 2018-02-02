<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TableType;

class TableTypeController extends Controller
{
    public function index(){
        $table_types = TableType::all();
        return view('tabletype-index',compact('table_types'));
    }
    public function create(){
        return view('tabletype-create');
    }

    public function store(Request $request){
        TableType::create([
            'name' => $request->name
        ]);

        return redirect('/tabletype');
    }
    public function edit(TableType $table_type){
    
        return view('tabletype-edit',compact('table_type'));
    }


    public function save(TableType $table_type,Request $request){
    
        $table_type->update([
            'name' => $request->name
        ]);

        return redirect('/tabletype'); 
    }

    public function delete(TableType $table_type){
        $table_type->delete();
        return redirect()->back();
    }
}
