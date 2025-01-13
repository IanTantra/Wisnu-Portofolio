<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
    //

    public function ProjectList() {
        return view('projects', [
            'title' => 'Projects',
            'projects' => Project::all()
        ]);
    }



    public function ProjectDetail(Project $project) {
        return view('project', [
            'title' => 'Projects',
            'project' => $project
    
        ]);
    }
}
