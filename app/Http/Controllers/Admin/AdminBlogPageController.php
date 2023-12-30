<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageBlogItem;
use Illuminate\Http\Request;

class AdminBlogPageController extends Controller
{
    public function index()
    {
        $page_blog_data = PageBlogItem::where('id', 1)->first();
        return view('admin.page_blog', compact('page_blog_data'));
    }


    public function update(Request $request)
    {
        $home_blog_data = PageBlogItem::where('id', 1)->first();
        $request->validate([
            'heading' => 'required',

        ]);

        $home_blog_data->heading = $request->heading;
        $home_blog_data->title = $request->title;
        $home_blog_data->meta_description = $request->meta_description;

        $home_blog_data->update();

        return redirect()->back()->with('success', 'Dados atualizados com sucesso!');

    }
}
