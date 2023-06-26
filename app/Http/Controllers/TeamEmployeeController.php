<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamEmployeeRequest;
use App\Models\TeamEmployee;
use Illuminate\Http\Request;

class TeamEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->successResponse(
            TeamEmployee::all(),
            "Team Employee List"
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
    public function store(TeamEmployeeRequest $request)
    {
        $validated = $request->validated();

        return $this->successResponse(
            TeamEmployee::create($validated),
            "New Team Employee created"
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(TeamEmployee $teamEmployee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TeamEmployee $teamEmployee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeamEmployeeRequest $request, TeamEmployee $teamEmployee)
    {
        $validated = $request->validated();

        if($teamEmployee->update($validated)) {
            return $this->successResponse(
                $teamEmployee,
                "Team Employee updated"
            ); 
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TeamEmployee $teamEmployee)
    {
        if($teamEmployee->delete()) {
            return $this->successResponse(
                $teamEmployee,
                "Team Employee deleted"
            ); 
        }
    }
}
