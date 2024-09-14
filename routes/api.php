<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\AppointmentsController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);

Route::get('/services', [ServicesController::class, 'index']);

Route::middleware('auth:sanctum')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout']);

    Route::put('/users/{id}', [UserController::class, 'update']);

    Route::delete('/users/{id}', [UserController::class, 'destroy']);

    Route::put('/services/{id}', [ServicesController::class, 'update']);

    Route::get('/appointments', [AppointmentsController::class, 'index']);

    Route::post('/appointments', [AppointmentsController::class, 'store']);

    Route::get('/appointments/{id}', [AppointmentsController::class, 'show']);

    Route::put('/appointments/{id}', [AppointmentsController::class, 'update']);

    Route::delete('/appointments/{id}', [AppointmentsController::class, 'destroy']);

    Route::middleware('role:admin')->group(function () {
        
        Route::get('/admin/dashboard', function () {
            return 'Bienvenido, Admin';
        });
        
        Route::post('/services', [ServicesController::class, 'store']);
        Route::delete('/services/{id}', [ServicesController::class, 'destroy']);
        
    });
    
    Route::get('/user/profile', function () {
        return auth()->user();
    });
});