<?php

namespace App\Http\Controllers\Secure;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('secure.dashboard.index');
    }
}
