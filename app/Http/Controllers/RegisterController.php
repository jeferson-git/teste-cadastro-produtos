<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Mockery\Exception\InvalidOrderException;
use PDO;

class RegisterController extends Controller
{
    public function index()
    {
        dd('aqui');
    }

    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        $newUser = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);

        $token = $newUser->createToken('secret')->plainTextToken;

        $response = [
            'message' => 'User created successfully',
            'user' => $newUser,
            'token' => $token
        ];

        return response($response, 201);
    }
}
