<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageContactItem;
use Illuminate\Http\Request;

class AdminContactPageController extends Controller
{
    public function index()
    {
        $page_contact_data = PageContactItem::where('id', 1)->first();
        return view('admin.page_contact', compact('page_contact_data'));
    }


    public function update(Request $request)
    {
        $page_contact_data = PageContactItem::where('id', 1)->first();
        $request->validate([
            'heading' => 'required',
            'map_code' => 'required'

        ]);

        $page_contact_data->heading = $request->heading;
        $page_contact_data->map_code = $request->map_code;
        $page_contact_data->title = $request->title;
        $page_contact_data->meta_description = $request->meta_description;

        $page_contact_data->update();

        return redirect()->back()->with('success', 'Dados atualizados com sucesso!');
    }
}
