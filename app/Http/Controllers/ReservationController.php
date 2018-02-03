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
use Barryvdh\DomPDF\Facade as PDF;

class ReservationController extends Controller
{

    public function show(Reservation $reservation)
    {
        $reservation->menus;
        return view('reservation-detail', compact('reservation'));
    }
    public function create()
    {
        $members = Member::all();
        $tables = Table::all();
        return view('reservation-create', compact('tables', 'members'));
    }

    public function next(Request $request)
    {
        $menus = Menu::with('type')->get();
        $detail = $request->all();

        if ($request->filled('member')) $member = 1;
        else $member = 0;

        return view('reservation-food', compact('menus', 'detail', 'member'));
    }


    public function receipt(Request $request)
    {

        $detail = json_decode($request->detail, true);

        $reservation = Reservation::create([
            'name' => $detail['name'],
            'lastname' => $detail['lastname'],
            'tel' => $detail['tel'],
            'member_id' => $detail['member'],
            'user_id' => Auth::user()->id,
            'seat' => $detail['seat'],
            'type' => $detail['type'],
            'total_price' => $request->total_price,
            'net_price' => $request->net_price,

            'date_time' => '2017-01-01 00:00:00'
        ]);

        if (isset($detail['table'])) {
            $tables = collect($detail['table']);
            $reservation->tables()->sync($tables);
        }

        $menus = collect($request->menus);
        $menus->each(function ($menu) use ($reservation) {
            $item = json_decode($menu, true);
            $reservation->menus()->attach([$item['id'] => ['quantity' => $item['qty']]]);
        });

        return redirect('reservation');

    }
    public function index(Request $request,$print = null)
    {

        if ($request->filled('month') && $request->filled('year') && $request->filled('type')) {

            $reservations = Reservation::whereYear('created_at', '=', $request->year)
                ->whereMonth('created_at', '=', $request->month)
                ->where('type', '=', $request->type)
                ->get();

            $price_array = $reservations->map(function ($item, $key) {
                return $item->net_price;
            });

            $net_price = $price_array->sum();
        } else {
            $reservations = Reservation::all();

            $price_array = $reservations->map(function ($item, $key) {
                return $item->net_price;
            });

            $net_price = $price_array->sum();
        }

        if($print){
            $pdf = PDF::loadView('reservation-index-pdf', compact('reservations', 'net_price'));
            return $pdf->download('invoice.pdf');
        }

        return view('reservation-index', compact('reservations', 'net_price'));
    }
    public function delete(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->back();
    }

    public function printReceipt(Reservation $reservation)
    {
        $reservation->menus;

        $pdf = PDF::loadView('reservation-pdf', compact('reservation'));
        return $pdf->download('invoice.pdf');
         ///return view('reservation-pdf',compact('reservation'));
    }


    public function printReport()
    {
        
        //$pdf = PDF::loadView('reservation-pdf', compact('reservation'));
        //return $pdf->download('invoice.pdf');
         ///return view('reservation-pdf',compact('reservation'));
    }
}
