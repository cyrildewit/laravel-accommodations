<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('portal.dashboard.index');
    }
}
