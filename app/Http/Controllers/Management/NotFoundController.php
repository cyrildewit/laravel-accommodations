<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;

class NotFoundController extends Controller
{
    public function __invoke()
    {
        return view('management.errors.404');
    }
}
