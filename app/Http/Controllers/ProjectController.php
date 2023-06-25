<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dbProject = Project::with("teams")->get();

        return response()->json([
            "error" => false,
            "message" => "All Projects list",
            "data" => $dbProject
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
    public function store(ProjectRequest $request)
    {
        $validated = $request->validated();
        $cProject = Project::create($validated);

        return response()->json([
            "error" => false,
            "message" => "Project create Succssfully",
            "data" => $cProject
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectRequest $request, Project $project)
    {
        $validated = $request->validated();
        $project->update($validated);

        return response()->json([
            "error" => false,
            "message" => "Project Update Successfully",
            "data" => $project
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return  response()->json([
            "error" => false,
            "message" => "Project delete successully"
        ]);
    }
}
