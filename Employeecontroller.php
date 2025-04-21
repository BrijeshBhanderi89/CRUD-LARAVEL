<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class Employeecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = Employee::orderBy("id", "asc")->paginate(3);
        return view("viewdata", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("addemployee");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $filename = time().rand(1111,9999).".".$request->image->extension();
        $request->image->move(public_path('assets/images/'),$filename);
        
        $obj = new Employee();
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->gender = $request->gender;
        $obj->phone = $request->phone;
        $obj->salary = $request->salary ;
        $obj->department= $request->department;
        $obj->message= $request->message;
        $obj->image= $filename;
        $obj->save();

        return redirect(route("employee.store"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view("editemployee", compact("employee"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $filename = time().rand(1111,9999).".".$request->image->extension();
        $request->image->move(public_path('assets/images/'),$filename);
        
        $obj = new Employee();
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->gender = $request->gender;
        $obj->phone = $request->phone;
        $obj->salary = $request->salary ;
        $obj->department= $request->department;
        $obj->message= $request->message;
        $obj->image= $filename;
        $obj->save();

        return redirect(route("employee.store"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect("/employee");

    }
}

