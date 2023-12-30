<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageFaqItem;
use Illuminate\Http\Request;

class AdminFaqPageController extends Controller
{
    public function index()
    {
        $page_faq_data = PageFaqItem::where('id', 1)->first();
        return view('admin.page_faq', compact('page_faq_data'));
    }


    public function update(Request $request)
    {
        $home_faq_data = PageFaqItem::where('id', 1)->first();
        $request->validate([
            'heading' => 'required',

        ]);

        $home_faq_data->heading = $request->heading;
        $home_faq_data->title = $request->title;
        $home_faq_data->meta_description = $request->meta_description;

        $home_faq_data->update();

        return redirect()->back()->with('success', 'Dados atualizados com sucesso!');

    }
}
