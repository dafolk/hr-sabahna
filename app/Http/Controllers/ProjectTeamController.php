<?php

namespace App\Http\Controllers;

use App\Http\Requests\Project_TeamRequest;
use App\Models\Project_Team;
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
    public function store(Project_TeamRequest $request)
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
    public function show(Project_Team $project_Team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project_Team $project_Team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project_Team $project_Team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project_Team $project_Team)
    {
        //
    }
}
