<?php

namespace App\View\Components\Dashboard;

use App\Models\Inputs;
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
        $inputs = Inputs::select('user_id', 'result_id')->with('results:id,score,message')->where('user_id', auth('web')->id())->whereDate('created_at', today())->first();
        if (!$inputs) {
            $inputs = Inputs::select('user_id', 'result_id')->with('results:id,score,message')->where('user_id', auth('web')->id())->whereDate('created_at', today()->subDay())->first();
        }

        if (!is_null($inputs?->results)) {
            $this->score = $inputs->results->score;
            $this->score = (int) ($this->score * 100);
            $this->feedback = $inputs->results->message;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.feedback', [
            'score' => $this->score,
            'feedback' => $this->feedback,
        ]);
    }
}
