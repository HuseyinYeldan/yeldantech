<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Project;
use TCG\Voyager\Models\User;


class ProfileController extends Controller
{
    public function index($slug){
        $user = User::where('name', $slug)->first();
        $blogs = Blog::all();
        $projects = Project::all();

        if (!$user) {
            return view('404', compact('projects','blogs')); 
        } 

        $blogsPaginate = Blog::where('publisher', $user->id)->orderByDesc('created_at')->paginate(6);
        if($user) {
            return view('auth.profile', compact('user','blogs','blogsPaginate','projects'));
        }

        if ($blogsPaginate->currentPage() > $blogsPaginate->lastPage()) {
            return view('404', compact('projects','blogs')); 
        }
    }
}
