<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function login(Request $request)
    {
        $request->validate([
            'username' => 'required | min:3 | max:10',
            'useremail' => 'required | email',
            'password' => 'required'
        ]);

        $request->session()->put('name', $request->input('username'));

        // to set the cookies
        // return response()->view('profile')->withCookie(cookie('name', 'user_name', 60));

        return view('profile');
    }

    function logout()
    {
        session()->pull('name');

        // delete the cookies
        // return response()->view('login')->cookie('user_name', null, -1);

        return view('login');
    }
}
