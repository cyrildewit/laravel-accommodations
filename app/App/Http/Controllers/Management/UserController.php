<?php

namespace App\Http\Controllers\Management;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * List all users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('management.user.index');
    }

    /**
     * Create user.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('management.user.create');
    }

    /**
     * Store user.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show user.
     *
     * @param \App\Models\Partner $partner
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('management.user.show');
    }

    /**
     * Edit user.
     *
     * @param \App\Models\Partner $partner
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('management.user.edit');
    }

    /**
     * Update user.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Destroy user.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
