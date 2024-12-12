<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\InputModules;
use App\Models\Inputs;
use App\Models\Results;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnalizedController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'date' => 'required|date|before:tomorrow|after:yesterday',
            'hours' => 'required|numeric|min:1',
            'quiz' => 'required|numeric|min:1',
            'modules' => 'required|array',
            'understand' => 'required|numeric|between:1,5',
        ]);


        $response = Http::post('http://localhost:5000/predict', [
            'duration' => $request->hours,
            'total_quiz' => $request->quiz,
            'total_subject' => count($request->modules),
        ]);

        // Check if the request is not successful
        if (!$response->successful()) {
            return back()
                ->withInput()
                ->with('error', 'Terjadi kesalahan saat menghubungi server!');
        }

        $prediction = $response->json();

        $result = Results::create([
            'score' => $prediction['prediction'],
            'message' => $prediction['feedback'],
        ]);

        $input = Inputs::create([
            'user_id' => auth('web')->id(),
            'result_id' => $result->id,
            'date' => $request->date,
            'total_hours' => $request->hours,
            'total_quiz' => $request->quiz,
            'comprehension_index' => $request->understand,
        ]);

        foreach ($request->modules as $moduleId) {
            InputModules::create([
                'input_id' => $input->id,
                'module_id' => $moduleId,
            ]);
        }

        return to_route('dashboard')
            ->with('success', 'Data berhasil disimpan!');
    }
}
