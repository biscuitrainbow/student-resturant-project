<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TableType;
use App\Table;
use App\Member;
use App\Menu;
use App\Reservation;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

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
        $detail = json_decode($request->detail, true);
        
        Reservation::create([
            'name' => $detail['name'],
            'lastname' => $detail['lastname'],
            'tel' => $detail['tel'],
            'member_id' => $detail['member'],
            'user_id' => Auth::user()->id,
            'seat' => $detail['seat'],
            'date_time' => '2017-01-01 00:00:00'
            
        ]);
            return redirect('reservation');
            
    }
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservation-index',compact('reservations'));
    }
    public function delete(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->back();
    }
}
