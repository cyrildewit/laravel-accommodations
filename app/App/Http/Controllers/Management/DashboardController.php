<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('management.dashboard.index');
    }
}
