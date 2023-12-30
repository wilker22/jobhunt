<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\JobCategory;
use App\Models\PageHomeItem;
use App\Models\Post;
use App\Models\Testimonial;
use App\Models\WhyChooseItem;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $home_page_data = PageHomeItem::where('id', 1)->first();
        $job_categories = JobCategory::orderBy('name', 'asc')->take(9)->get();
        $why_choose_items = WhyChooseItem::get();
        $testimonials = Testimonial::get();
        $posts = Post::orderBy('id', 'desc')->take(3)->get();

        //dd($testimonials);

        return view('front.home', compact('home_page_data', 'job_categories', 'why_choose_items', 'testimonials', 'posts'));
    }


}
