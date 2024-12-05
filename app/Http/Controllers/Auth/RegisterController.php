<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required', 'string', 'max:155'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'max:150', 'confirmed'],
        ]);

        User::create($credentials);

        return redirect()->route('login');
    }
}
