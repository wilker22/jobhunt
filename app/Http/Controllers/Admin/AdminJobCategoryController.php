<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobCategory;
use Illuminate\Http\Request;

class AdminJobCategoryController extends Controller
{
    public function index()
    {
        $job_categories = JobCategory::get();
        return view('admin.job_category', compact('job_categories'));
    }

    public function create()
    {
        return view('admin.job_category_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'icon' => 'required'
        ]);

        $obj = new JobCategory();
        $obj->name = $request->name;
        $obj->icon = $request->icon;

        $obj->save();

        return redirect()->route('admin_job_category')->with('success', 'Categoria cadastrada com sucesso!');

    }
}
