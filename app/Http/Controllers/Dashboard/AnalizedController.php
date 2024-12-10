<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\InputModules;
use App\Models\Inputs;
use Illuminate\Http\Request;

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

        $userId = auth('web')->id();

        $input = Inputs::create([
            'user_id' => $userId,
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
