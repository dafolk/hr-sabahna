<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dbTeam =  Team::with("projects")->get();

        return response()->json([
            "error" => false,
            "message" => "All Teams List",
            "data" => $dbTeam
        ]);
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
    public function store(TeamRequest $request)
    {
        $validated = $request->validated();
        $cTeam = Team::create($validated);

        return  response()->json([
            "error" => false,
            "message" => "Team create Succssfully",
            "data" => $cTeam
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeamRequest $request, Team $team)
    {
        $validated = $request->validated();
        $team->update($validated);

        return response()->json([
            "error" => false,
            "message" => "Team Update Successfully",
            "data" => $team
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return response()->json([
            "error" => false,
            "message" => "Team delete successfully"
        ]);
    }
}
