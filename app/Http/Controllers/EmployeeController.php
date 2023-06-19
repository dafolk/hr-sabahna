<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->successResponse(Employee::all(), "Employees List");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeRequest $request)
    {
        $validated = $request->validated();

        $validated['password'] = bcrypt($validated['password']);
        
        return $this->successResponse(
            Employee::create($validated),
            "New Employee Created"
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return $this->successResponse($employee, "Specific Employee Data");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeeRequest $request, Employee $employee)
    {
        $validated = $request->validated();

        $validated['password'] = bcrypt($validated['password']);

        if($employee->update($validated)) {
            return $this->successResponse($employee, "Employee data updated successfully");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        if($employee->delete()) {
            return $this->successResponse($employee, "Employee deleted successfullly");
        }
    }
}
