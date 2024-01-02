<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Project;

class ProjectsController extends Controller
{

    public function index(){
        $blogs = Blog::all();
        $projects = Project::all();

        return view('projects', compact('blogs','projects'));
    }

}
