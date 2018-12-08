<?php

namespace App\Http\Controllers\Management;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    /**
     * List all bookings.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('management.booking.index');
    }

    /**
     * Create booking.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('management.booking.create');
    }

    /**
     * Store booking.
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
     * Show booking.
     *
     * @param \App\Models\Partner $partner
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('management.booking.show');
    }

    /**
     * Edit booking.
     *
     * @param \App\Models\Partner $partner
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('management.booking.edit');
    }

    /**
     * Update booking.
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
     * Destroy booking.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
