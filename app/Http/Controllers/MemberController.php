<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use Illuminate\Support\Facades\Auth;


class MemberController extends Controller
{
    public function create()
    {
        return view('member-create');
    }
    public function store(Request $request)
    {
        Member::create([
            'code' => $request->code,
            'name' => $request->name,
            'lastname' => $request->lastname,
            'address' => $request->address,
            'tel' => $request->tel,
            'user_id' => Auth::user()->id
        ]);

        return redirect('/member');
    }
    public function index()
    {
        
         $members = Member::all();
        return view('member-index' , compact('members'));
    }

    public function edit(Member $member){
        return view('member-edit',compact('member'));
    }

    public function save(Member $member,Request $request){
        $member->update([
            'code' => $request->code,
            'name' => $request->name,
            'lastname' => $request->lastname,
            'address' => $request->address,
            'tel' => $request->tel,
        ]);

        return redirect('/member');
    }

    public function delete(Member $member){
        $member->delete();
        return redirect()->back();
    }
}
