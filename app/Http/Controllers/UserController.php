<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserType;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index(){
        $users = User::all();
        return view('user-index',compact('users'));
    }

    public function delete(User $user){
        $user->delete();
        return redirect()->back();
    }

    public function login()
    {
        return view('login');
    }

    public function logout(){
        Auth::logout();

        return redirect('/login');
    }

    public function authenticate(Request $request){
        $username = $request->username;
        $password = $request->password;

        if(Auth::attempt(['username' => $username,'password' => $password])){
            return redirect('/reservation/create');
        }

        return redirect()->back();
    }

    public function register()
    {
        $user_types =  UserType::all();

        return view('register',compact('user_types'));
    }

    public function store(Request $request){
        User::create([
            'name' => $request->first_name,
            'lastname' => $request->last_name,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'tel' => $request->tel,
            'user_type_id' => $request->type
        ]);

            
        return redirect('/login');
    }
}
