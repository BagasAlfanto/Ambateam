<?php

namespace App\View\Components\Dashboard;

use App\Models\Inputs;
use App\Models\Results;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Feedback extends Component
{
    protected $score;
    protected $feedback;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        // Get today's inputs if missing then get yesterday's inputs, but if user has no inputs then give null
        $inputs = Inputs::select('user_id', 'result_id')->with('results:id,score,message')->where('user_id', auth('web')->id())->whereDate('created_at', today())->first();
        if (!$inputs) {
            $inputs = Inputs::select('user_id', 'result_id')->with('results:id,score,message')->where('user_id', auth('web')->id())->whereDate('created_at', today()->subDay())->first();
        }

        // Get results if inputs are available
        if (!is_null($inputs?->results)) {
            $this->score = $inputs->results->score;
            $this->feedback = $inputs->results->message;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.feedback', [
            'feedback' => $this->feedback,
        ]);
    }
}
