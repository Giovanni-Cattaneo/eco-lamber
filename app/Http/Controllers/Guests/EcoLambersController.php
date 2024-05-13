<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\events;
use Illuminate\Http\Request;

class EcoLambersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = events::get();
        return view('guest.welcome', compact('events'));
    }

    public function about_us()
    {
        return view('guest.about_us');
    }

    public function contacts()
    {
        return view('guest.contacts');
    }

    public function get_id($id)
    {
        abort_unless($id >= 0 && $id < count(events::get()), 404);

        $events = events::get()[$id];

        // dd($product);

        return view('guest.single', compact('events'));
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
    public function show(events $ecolambers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(events $ecolambers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, events $ecolambers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(events $ecolambers)
    {
        //
    }
}
