<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\SEOMeta;

class HomeController extends Controller
{
    public function index()
    {
        SEOMeta::setTitle('Home');

        return view('front.home.index');
    }
}
