<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function show($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    public function update(Request $request, $id)
    {
        $userId = auth()->user()->id;
        $userRole = auth()->user()->role;

        if ($userRole === 'admin') {
            $user = User::find($id);
            $user->update($request->all());
            return response()->json($user);
        }
        if ($userId != $id) {
            return response()->json(['error' => 'No tienes permiso para actualizar este usuario'], 403);
        }
        $user = User::find($id);
        $user->update($request->all());
        return response()->json($user);
    }

    public function destroy($id)
    {
        $userRole = auth()->user()->role;
        $userId = auth()->user()->id;

        if ($userRole === 'admin') {
            $user = User::find($id);
            $user->delete();
            return response()->json(['message' => 'Usuario eliminado correctamente']);
        }
        if ($userId != $id) {
            return response()->json(['error' => 'No tienes permiso para eliminar este usuario'], 403);
        }
        
        $user = User::find($id);
        $user->delete();
        return response()->json(['message' => 'Usuario eliminado correctamente']);
    }
}
