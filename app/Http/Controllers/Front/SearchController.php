<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\SEOMeta;

class SearchController extends Controller
{
    public function index()
    {
        return view('front.search.index');
    }
}
