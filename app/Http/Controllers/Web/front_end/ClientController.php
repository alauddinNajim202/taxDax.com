<?php

namespace App\Http\Controllers\Web\front_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user_dashboard.layouts.index_client');
    }

    public function bookmark()
    {
        return view('user_dashboard.layouts.bookmarks');
    }

    public function booking()
    {
        return view('user_dashboard.layouts.bookings');
    }

    public function profile_booking()
    {
        return view('user_dashboard.layouts.profile-booking');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
