<?php

namespace App\View\Components\MyResume;

use App\Models\Skil;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SkillSection extends Component
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
        $datas = Skil::get();
        return view('components.my-resume.skill-section', compact('datas'));
    }
}
