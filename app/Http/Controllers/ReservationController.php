<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TableType;
use App\Table;
use App\Member;
use App\Menu;

class ReservationController extends Controller
{
    public function create()
    {
        $members = Member::all();
        $tables = Table::all();
        return view('reservation-create',compact('tables','members'));
    }

    public function next(Request $request){
        $menus = Menu::all();
        $detail = $request->all();
        return view('reservation-food',compact('menus','detail'));
    }


    public function receipt(Request $request){
        return $request;
    }
}
