<?php

namespace App\Http\Controllers;

use App\Models\appointments;
use App\Http\Requests\StoreappointmentsRequest;
use App\Http\Requests\UpdateappointmentsRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = DB::table('appointments')
            ->select('appointments.id', 'appointments.appointment_date', 'users.name as user_name', 'services.name as service_name')
            ->join('users', 'appointments.user_id', '=', 'users.id')
            ->join('services', 'appointments.service_id', '=', 'services.id')
            ->get();
        return response()->json($appointments);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreappointmentsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(appointments $appointments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateappointmentsRequest $request, appointments $appointments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(appointments $appointments)
    {
        //
    }
}
