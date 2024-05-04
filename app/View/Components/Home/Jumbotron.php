<?php

namespace App\View\Components\Home;

use App\Models\Section;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Jumbotron extends Component
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
        return view('components.home.jumbotron', compact('data'));
    }
}
