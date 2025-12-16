<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PositionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::resource('company', CompanyController::class);

Route::resource('employee', EmployeeController::class);

Route::resource('departement', DepartementController::class);

Route::resource('position', PositionController::class);


