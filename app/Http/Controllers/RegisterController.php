<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(){
        return view('auth.register');
    }
    public function regist(Request $request){

        User::create([
            'name'=>($request->name),
            'email'=>($request->email),
            'password'=>bcrypt($request->password),
        ]);
        return redirect()->route('login');
    }
}
