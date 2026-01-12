<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class filehandlingController extends Controller
{
    function filehandle(Request $request)
    {
        $path = $request->file('file')->store('avatars', 'public');
        return view('display', ['file' => $path]);
    }
}