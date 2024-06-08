<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\JobCategory;
use App\Models\PageJobCategoryItem;
use App\Models\PagePrivacyItem;
use Illuminate\Http\Request;

class JobCategoryController extends Controller
{
    public function categories()
    {
        $job_category_page_item = PageJobCategoryItem::where('id', 1)->first();
        $job_categories = JobCategory::orderBy('name', 'asc')->get();
        return view('front.job_categories', compact('job_categories', 'job_category_page_item'));
    }

    

}
