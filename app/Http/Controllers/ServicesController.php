<?php

namespace App\Http\Controllers;

use App\Models\services;
use App\Http\Requests\StoreservicesRequest;
use App\Http\Requests\UpdateservicesRequest;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreservicesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(services $services)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateservicesRequest $request, services $services)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(services $services)
    {
        //
    }
}
