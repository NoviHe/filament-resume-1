<?php

namespace App\View\Components\MyResume;

use App\Models\LinkSocial;
use App\Models\Section;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class JumbotronSection extends Component
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
        $data = Section::where('post_as', 'JUMBOTRON')->first();
        $socials = LinkSocial::get();
        return view('components.my-resume.jumbotron-section', compact('data', 'socials'));
    }
}
