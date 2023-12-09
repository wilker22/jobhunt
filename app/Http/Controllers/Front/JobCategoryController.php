<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\JobCategory;
use Illuminate\Http\Request;

class JobCategoryController extends Controller
{
    public function categories()
    {
        $job_categories = JobCategory::orderBy('name', 'asc')->get();
        return view('front.job_categories', compact('job_categories'));
    }
}
