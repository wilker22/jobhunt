<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\PagePrivacyItem;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function index()
    {
        $privacy_page_item = PagePrivacyItem::where('id', 1)->first();
        return view('front.privacy', compact('privacy_page_item'));
    }
}
