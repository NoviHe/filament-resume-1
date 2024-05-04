<?php

namespace App\View\Components;

use App\Models\Education;
use App\Models\Experience;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class About extends Component
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
        $educations = Education::latest()->get();
        $experiences = Experience::latest()->get();
        return view('components.about', compact('educations', 'experiences'));
    }
}
