<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectTeamRequest;
use App\Models\ProjectTeam;
use Illuminate\Http\Request;

class ProjectTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(ProjectTeamRequest $request)
    {
        $validated = $request->validated();
        $project_team = ProjectTeam::create($validated);

        return response()->json([
            "error" => false,
            "message" => "Project_Team create succssfully",
            "data" => $project_team
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(ProjectTeam $projectTeam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProjectTeam $projectTeam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProjectTeam $projectTeam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectTeam $projectTeam)
    {
        //
    }
}
