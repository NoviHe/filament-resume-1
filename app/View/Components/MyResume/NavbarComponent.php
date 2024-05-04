<?php

namespace App\View\Components\MyResume;

use App\Models\MenuNavbar;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavbarComponent extends Component
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
        $navbars = MenuNavbar::where('visibility', true)->orderBy('ordered', 'ASC')->get();
        return view('components.my-resume.navbar-component', compact('navbars'));
    }
}
