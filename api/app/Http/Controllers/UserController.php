<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function test()
    {
        return response()->json(['ok' =>true]);
    }

    function envio(Request $request)
    {
        $validated = $request->validate([
            'email' =>'required|email',
            'password' => 'required|min:6'

        ]);

        return response()->json(['ok'=>true,'email' => $validated['email']]);
    }
}
