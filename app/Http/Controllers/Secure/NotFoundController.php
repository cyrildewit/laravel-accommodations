<?php

namespace App\Http\Controllers\Secure;

use App\Http\Controllers\Controller;

class NotFoundController extends Controller
{
    public function __invoke()
    {
        return view('secure.errors.404');
    }
}
