<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageTermItem;
use Illuminate\Http\Request;

class AdminTermPageController extends Controller
{
    public function index()
    {
        $page_term_data = PageTermItem::where('id', 1)->first();
        return view('admin.page_term', compact('page_term_data'));
    }


    public function update(Request $request)
    {
        $page_term_data = PageTermItem::where('id', 1)->first();
        $request->validate([
            'heading' => 'required',
            'content' => 'required'
        ]);

        $page_term_data->heading = $request->heading;
        $page_term_data->content = $request->content;
        $page_term_data->title = $request->title;
        $page_term_data->meta_description = $request->meta_description;

        $page_term_data->update();

        return redirect()->back()->with('success', 'Dados atualizados com sucesso!');

    }
}
