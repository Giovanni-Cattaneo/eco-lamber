<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\ecolambers;
use Illuminate\Http\Request;

class EcoLambersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('guest.welcome');
    }

    public function about_us()
    {
        return view('guest.about_us');
    }

    public function contacts()
    {
        return view('guest.contacts');
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
    public function show(ecolambers $ecolambers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ecolambers $ecolambers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ecolambers $ecolambers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ecolambers $ecolambers)
    {
        //
    }
}
