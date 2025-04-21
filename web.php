<?php

use App\Http\Controllers\APIcontroller;
use App\Http\Controllers\EmployeeCntroller;
use App\Http\Controllers\Employeecontroller;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource(name: 'employee',controller: Employeecontroller::class);
Route::get('/alldata',[APIcontroller::class,"alldata"]);