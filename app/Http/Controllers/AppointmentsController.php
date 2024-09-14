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
    public function show(Request $request)
    {
        $appointment = DB::table('appointments')
            ->select('appointments.id', 'appointments.appointment_date', 'users.name as user_name', 'services.name as service_name')
            ->join('users', 'appointments.user_id', '=', 'users.id')
            ->join('services', 'appointments.service_id', '=', 'services.id')
            ->where('appointments.id', $request->id)
            ->first();
        return response()->json($appointment);
    }

    public function update(Request $request)
    {
        $user_id = Auth::user()->id;
        $role = Auth::user()->role;

        if($role === 'admin'){
            $request->validate([
                'appointment_date' => 'date',
                'user_id' => 'exists:users,id',
                'service_id' => 'exists:services,id',
            ]);
            $appointment = appointments::find($request->id);
            $appointment->update($request->all());
            return response()->json($appointment);
        }

        if($user_id != $request->user_id){
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $request->validate([
            'appointment_date' => 'date',
            'user_id' => 'exists:users,id',
            'service_id' => 'exists:services,id',
        ]);

        $appointment = appointments::find($request->id);
        $appointment->update($request->all());
        return response()->json($appointment);
    }

    public function destroy(Request $request)
    {
        $user_id = Auth::user()->id;
        $role = Auth::user()->role;

        if($role === 'admin'){
            $appointment = appointments::find($request->id);
            $appointment->delete();
            return response()->json(['message' => 'Appointment deleted']);  
        }

        if($user_id != $request->user_id){
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $appointment = appointments::find($request->id);
        $appointment->delete();
        return response()->json(['message' => 'Appointment deleted']);
    
}
}
