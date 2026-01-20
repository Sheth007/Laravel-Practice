<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class authentication extends Controller
{
    function up(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $value = User::create($data);

        if ($value) {
            return view('welcome');
        }
    }

    function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($data)) {
            return redirect()->route('logincheck');
        } else {
            return view('welcome');
        }
    }

    function logincheck()
    {
        if (Auth::check()) {
            return view('dashboard');
        } else {
            return view('welcome');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('app');
    }

    function displayData()
    {
        $User = User::paginate(3);
        return view('admin', ['data' => $User]);
    }
}
