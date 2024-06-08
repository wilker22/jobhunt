<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PagePricingItem;
use Illuminate\Http\Request;

class AdminPricingPageController extends Controller
{
    public function index()
    {
        $page_pricing_data = PagePricingItem::where('id', 1)->first();
        return view('admin.page_pricing', compact('page_pricing_data'));
    }


    public function update(Request $request)
    {
        $home_pricing_data = PagePricingItem::where('id', 1)->first();
        $request->validate([
            'heading' => 'required',

        ]);

        $home_pricing_data->heading = $request->heading;
        $home_pricing_data->title = $request->title;
        $home_pricing_data->meta_description = $request->meta_description;

        $home_pricing_data->update();

        return redirect()->back()->with('success', 'Dados atualizados com sucesso!');

    }
}
