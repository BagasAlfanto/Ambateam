<?php

namespace App\View\Components\Dashboard;

use App\Models\Modules;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Module extends Component
{
    /**
     * The modules.
     */
    protected $modules;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->modules = Modules::select('name')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.module', [
            'modules' => $this->modules,
        ]);
    }
}
