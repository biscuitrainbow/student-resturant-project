<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuType;
use App\Menu;
use Illuminate\Support\Facades\Auth;

class FoodController extends Controller
{
    public function create()
    {
        $menu_types =  MenuType::all();
        return view('food-create',compact('menu_types'));
    }

    public function store(Request $request){
            Menu::create([
                'name' => $request->name,
                'price' => $request->price,
                'img' => $request->image,
                'menu_type_id' => $request->type,
                'user_id' => Auth::user()->id
            ]);

            return redirect('/food/');
    }

    public function index()
    {
        $menus =  Menu::all();
        return view('food-index',compact('menus'));
    }
}
