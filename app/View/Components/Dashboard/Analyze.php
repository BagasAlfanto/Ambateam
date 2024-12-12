<?php

namespace App\View\Components\Dashboard;

use App\Models\Inputs;
use App\Models\Modules;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Analyze extends Component
{
    /**
     * The modules.
     */
    protected $modules;

    /**
     * Whether today's input is already submitted.
     */
    protected $isTodayAlreadySubmitted;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->modules = Modules::select('id', 'name')->get();
        $this->isTodayAlreadySubmitted = Inputs::whereDate('created_at', today())->exists();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.analyze', [
            'modules' => $this->modules,
            'isTodayAlreadySubmitted' => $this->isTodayAlreadySubmitted,
        ]);
    }
}
