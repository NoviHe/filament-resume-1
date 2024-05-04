<?php

namespace App\View\Components\MyResume;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ServicesSection extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.my-resume.services-section');
    }
}
