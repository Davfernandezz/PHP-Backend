<?php

namespace App\Http\Controllers;

use App\Models\services;
use App\Http\Requests\StoreservicesRequest;
use App\Http\Requests\UpdateservicesRequest;
use Illuminate\Http\Request;


class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = services::all();
        return response()->json($services);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   

            $services = services::create($request->all());
            $services->save();
            return response()->json($services, 201);
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
