<?php

namespace App\Http\Controllers;

use App\Models\appointments;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        $request->validate([
            'appointment_date' => 'required|date',
            'user_id' => 'required|exists:users,id',
            'service_id' => 'required|exists:services,id',
        ]);

        $appointment = appointments::create($request->all());
        return response()->json($appointment, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(appointments $appointments)
    {
        //
    }

}
