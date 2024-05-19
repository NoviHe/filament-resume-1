<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProjectDetailController extends Controller
{
    function index(): View
    {
        $categories = ProjectCategory::all();
        $projects = Project::with('category')->where('published', true)->latest()->get();
        return view(get_setting_value('_theme_landing') . '.project-list', compact('categories', 'projects'));
    }

    function detail($slug): View
    {
        $data = Project::with('category')->where('slug', $slug)->first();
        return view(get_setting_value('_theme_landing') . '.project-detail', compact('data'));
    }
}
