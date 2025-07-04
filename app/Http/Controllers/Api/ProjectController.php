<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = Project::with('technologies')->get();

        return response()->json(
            [
                "response" => true,
                "data" => $projects
            ]
        );
    }

    public function show(Project $project)
    {

        $project->load('technologies', 'type');

        return response()->json(
            [
                "response" => true,
                "data" => $project
            ]
        );
    }
}
