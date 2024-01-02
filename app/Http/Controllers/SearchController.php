<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Project;

class SearchController extends Controller
{
    public function index(Request $request){
        // Get the search value from the request
        $search = $request->input('ara');
        $blogs = Blog::all();
        $projects = Project::all();

        // Search in the title and body columns from the posts table
        $blogSearch = Blog::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('content', 'LIKE', "%{$search}%")
            ->get();
            
        // Return the search view with the resluts compacted
        return view('search', compact('blogSearch','blogs','projects'));
    }
}
