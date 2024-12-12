<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Inputs;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Make dummy data for current month
        $analyticsChart = [];
        $daysInCurrentMonth = Carbon::now()->daysInMonth;
        $initialData = array_fill(0, $daysInCurrentMonth, 0);

        // We want to make a dashboard chart for all results from inputs table
        $inputs = Inputs::select('user_id', 'result_id', 'created_at')
            ->with('results:id,score,message')
            ->where('user_id', auth('web')->id())
            ->whereMonth('created_at', date('m'))
            ->whereYear('created_at', date('Y'))
            ->get();

        if ($inputs->isEmpty()) {
            $analyticsChart = [
                'name' => now()->format('F'),
                'data' => $initialData,
            ];
        } else {
            $analyticsChart['data'] = array_map(function ($data) {
                return $data * 100;
            }, $initialData);

            $inputs->each(function ($input) use (&$analyticsChart) {
                $day = $input->created_at->day;
                $analyticsChart['data'][$day] = $input->results->score * 100;
            });

            $analyticsChart['name'] = now()->format('F');
        }

        $analyticsChart = json_encode($analyticsChart);

        return view('pages.dashboard', compact('analyticsChart'));
    }
}
