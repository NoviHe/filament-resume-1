<?php

namespace App\View\Components\MyResume;

use App\Models\Project;
use App\Models\ProjectCategory;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PortfolioSection extends Component
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
        $categories = ProjectCategory::all();
        $projects = Project::with('category')->where('published', true)->latest()->get()->take(10);
        return view('components.my-resume.portfolio-section', compact('categories', 'projects'));
    }
}
