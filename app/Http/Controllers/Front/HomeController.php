<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\JobCategory;
use App\Models\PageHomeItem;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $home_page_data = PageHomeItem::where('id', 1)->first();
        $job_categories = JobCategory::orderBy('name', 'asc')->take(9)->get();
        //dd($home_page_data);
        return view('front.home', compact('home_page_data', 'job_categories'));
    }

    
}
