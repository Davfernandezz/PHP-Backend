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
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $userRole = auth()->user()->role;
        $userId = auth()->user()->id;

        if ($userRole === 'admin') {
            $services = services::find($id);
            $services->update($request->all());
            return response()->json($services);
        }
        
        if ($userId != $id) {
            return response()->json(['error' => 'No tienes permiso para actualizar este servicio'], 403);
        }

        $services = services::find($id);
        $services->update($request->all());
        return response()->json($services);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(services $services)
    {
        //
    }
}
