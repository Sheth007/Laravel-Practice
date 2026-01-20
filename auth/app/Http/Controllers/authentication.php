<?php

namespace App\Http\Controllers;

use App\Events\NewUserCreated;
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
            event(new NewUserCreated($value));
            return redirect()->view('welcome');
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
}
