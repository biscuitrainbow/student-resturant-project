<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuType;

class MenuTypeController extends Controller
{
    public function index(){
        $menu_types = MenuType::all();
        return view('menutype-index',compact('menu_types'));
    }

    public function create(){
        return view('menutype-create');
    }

    public function store(Request $request){
        MenuType::create([
            'name' => $request->name
        ]);

        return redirect('/menutype');
    }

    public function edit(MenuType $menu_type){
    
        return view('menutype-edit',compact('menu_type'));
    }


    public function save(MenuType $menu_type,Request $request){
    
        $menu_type->update([
            'name' => $request->name
        ]);

        return redirect('/menutype'); 
    }

    public function delete(Menutype $menu_type){
        $menu_type->delete();
        return redirect()->back();
    }
}
