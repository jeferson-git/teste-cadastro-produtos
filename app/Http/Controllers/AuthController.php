<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($fields)) {
            return redirect()->intended('dashboard/');
        }

        return view('site.home', ['invalidCredentials' => 1]);

    }

    public function logout()
    {
        Auth::logout();
    }
}
