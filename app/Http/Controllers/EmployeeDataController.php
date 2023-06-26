<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeDataRequest;
use App\Models\EmployeeData;

class EmployeeDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->successResponse(
            EmployeeData::all(),
            'Employee Data List'
        );
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
    public function store(EmployeeDataRequest $request)
    {
        $validated = $request->validated();

        return $this->successResponse(
            EmployeeData::create($validated),
            'Employee data created'
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(EmployeeData $employeeData)
    {
        return $this->successResponse(
            $employeeData,
            "Employee data"
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmployeeData $employeeData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeeDataRequest $request, EmployeeData $employeeData)
    {
        $validated = $request->validated();

        if($employeeData->update($validated)){
            return $this->successResponse(
                $employeeData,
                "Employee Data Updated"
            );
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmployeeData $employeeData)
    {
        if($employeeData->delete()) {
            return $this->successResponse(
                $employeeData,
                "Employee Data Deleted"
            );
        }
    }
}
