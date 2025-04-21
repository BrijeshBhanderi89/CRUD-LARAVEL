<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class APIcontroller extends Controller
{
    public function alldata() {
        $data = Employee::all();
        return response()->json($data);
    }
}
