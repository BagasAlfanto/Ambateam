<?php

namespace App\Http\Controllers;

use App\Models\Inputs;
use Illuminate\Http\Request;

class AnalizedController extends Controller
{
    public function tambahdata(){
        return view('chart.inputchart');
    }

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

        Inputs::create([
            'date' => $request->date,
            'total_hours' => $request->jam,
            'quizz' => $request->quizz,
            'modul' => json_encode($request->modul), // Simpan ID modul dari select2
            'comprehension_index' => $request->pemahaman,

        ]);
        return redirect('/dashboard')->with('success', 'Data berhasil disimpan!');
    }
}
