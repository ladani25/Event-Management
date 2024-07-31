<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class usercontrollers extends Controller
{
    public function login()
    {
        return view('front-end.login');
    }

    public function register()
    {
        return view('front-end.register');
    }

    public function user_register(Request $request)
    {
        // dd($request->all());
        $user = new users();
        $user->	username = $request->name;
        $user->phonenumber	= $request->phone_number;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return view('front-end.home');
    }

    public function user_login(Request $request)
    {
        // dd($request->all());
        $request->session()->put('email', $request->email);
        $email = $request->email;
        $password = $request->password;
        $user = users::where('email', $email)->where('password', $password)->first();
        if ($user) 
        {
            return view('front-end.home');
        } else 
        {
            return view('front-end.login');
        }
        
    }
}
