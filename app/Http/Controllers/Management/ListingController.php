<?php

namespace App\Http\Controllers\Management;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListingController extends Controller
{
    /**
     * List all listings.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('management.listing.index');
    }

    /**
     * Create listing.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('management.listing.create');
    }

    /**
     * Store listing.
     *
     * @param  Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show listing.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('management.listing.show');
    }

    /**
     * Edit listing.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('management.listing.edit');
    }

    /**
     * Update listing.
     *
     * @param  Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Destroy listing.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
