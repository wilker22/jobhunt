<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\PageTermItem;
use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function index()
    {
        $term_page_item = PageTermItem::where('id', 1)->first();
        return view('front.terms', compact('term_page_item'));
    }
}
