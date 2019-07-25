<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;

class NotFoundController extends Controller
{
    public function __invoke()
    {
        return view('portal.errors.404');
    }
}
