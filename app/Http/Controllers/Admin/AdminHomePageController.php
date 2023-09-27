<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageHomeItem;
use Illuminate\Http\Request;

class AdminHomePageController extends Controller
{
    public function index()
    {
        $page_home_data = PageHomeItem::where('id', 1)->first();
        return view('admin.page_home', compact('page_home_data'));
    }

    public function update(Request $request)
    {
        echo $request->heading;
    }
}
