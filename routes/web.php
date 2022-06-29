<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospitalController;

Route::get('/', [HospitalController::class, 'home'])->name('home');

Route::get('/patients', [HospitalController::class, 'patients']);

Route::get('/doctor/{id}', [HospitalController::class, 'doctor']);

Route::get('/doctors', [HospitalController::class, 'doctors']);

Route::get('/patient/{id}', [HospitalController::class, 'patient']);

