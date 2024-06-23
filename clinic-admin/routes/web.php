<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\QueueController;
use App\Http\Controllers\PatientController;


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments');
Route::get('/queue', [QueueController::class, 'index'])->name('queue');
Route::get('/queueupdate/{id}', [QueueController::class, 'update'])->name('queueupdate');
Route::get('/patientscreate', [PatientController::class, 'create'])->name('patientscreate');
Route::post('/patients', [PatientController::class, 'store'])->name('patientsstore');
