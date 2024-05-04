<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProjectDetailController extends Controller
{
    function index(): View
    {
        return view(get_setting_value('_theme_landing') . '.project');
    }

    function detail($slug): View
    {
        $data = Project::with('category')->where('slug', $slug)->first();
        return view(get_setting_value('_theme_landing') . '.project-detail', compact('data'));
    }
}
