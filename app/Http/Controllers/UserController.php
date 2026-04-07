<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(['users' => []]);
    }

    public function register(Request $request)
    {
        return response()->json(['message' => 'Register OK']);
    }

    public function login(Request $request)
    {
        return response()->json(['message' => 'Login OK']);
    }
}