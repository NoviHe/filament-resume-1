<?php

namespace App\View\Components\MyResume;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Section;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ResumeSection extends Component
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
        $sumary = Section::where('post_as', 'JUMBOTRON')->first();
        $education = Education::latest()->get();
        $experiences = Experience::latest()->get();
        return view('components.my-resume.resume-section', compact('sumary', 'education', 'experiences'));
    }
}
