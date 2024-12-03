<?php

namespace App\Http\Controllers;

use App\Models\analized;
use Illuminate\Http\Request;

class AnalizedController extends Controller
{
    public function tambahdata(){
        return view('chart.inputchart');
    }


    // public function insertdata(Request $request)
    // {
    //     $request->validate([
    //         'modul' => 'required|array', // Validasi bahwa input adalah array
    //         'modul.*' => 'exists:analized,id', // Validasi setiap item ada di database
    //     ]);

    //     foreach ($request->modul as $modul) {
    //         Analized::create($request->all());
    //     }

    //     return redirect()->back()->with('success', 'Data berhasil disimpan!');
    // }

    public function insertdata(Request $request)
{
    // Validasi data input
    $request->validate([
        'date' => 'required|date',
        'jam' => 'required|string',
        'quizz' => 'required|string',
        'modul' => 'required', // Validasi input adalah array
        'pemahaman' => 'required|integer|between:1,5',
    ]);
    // Loop untuk menyimpan setiap modul

    Analized::create([
        'date' => $request->date,
        'jam' => $request->jam,
        'quizz' => $request->quizz,
        'modul' => json_encode($request->modul), // Simpan ID modul dari select2
        'pemahaman' => $request->pemahaman,

    ]);
    return redirect('/dashboard')->with('success', 'Data berhasil disimpan!');
}
}
