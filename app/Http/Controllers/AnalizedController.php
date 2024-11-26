<?php

namespace App\Http\Controllers;

use App\Models\analized;
use Illuminate\Http\Request;

class AnalizedController extends Controller
{
    public function tambahdata(){
        return view('chart.inputchart');
    }

    public function insertdata(Request $request){
        Analized::create($request->all());
        return redirect('/home');
    }
}
