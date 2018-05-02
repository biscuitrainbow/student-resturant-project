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
        $menu_types = MenuType::all();
        return view('food-create', compact('menu_types'));
    }

    public function store(Request $request)
    {
        $path = $request->file('image')->store('imgs', 'public');

        Menu::create([
            'name' => $request->name,
            'price' => $request->price,
            'img' => '/storage/' . $path,
            'promotion' => $request->promotion,
            'description' => $request->description,
            'menu_type_id' => $request->type,
            'user_id' => Auth::user()->id
        ]);

        return redirect('/food/');
    }

    public function index(Request $request)
    {
        $types = MenuType::all();

        if ($request->filled('type') && $request->has('type')) {
            $menus = MenuType::find($request->type)->menu;
        } else {
            $menus = Menu::all();
        }

        return view('food-index', compact('menus', 'types'));
    }
    public function edit(Menu $food)
    {
        $menu_types = MenuType::all();
        return view('food-edit', compact('food', 'menu_types'));
    }

    public function save(Menu $food, Request $request)
    {
        $food->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'promotion' => $request->promotion,
            'menu_type_id' => $request->type,
        ]);

        return redirect('/food');
    }
    public function delete(Menu $food)
    {
        $food->delete();
        return redirect()->back();
    }
}
