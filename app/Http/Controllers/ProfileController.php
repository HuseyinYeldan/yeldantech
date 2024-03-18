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
        $blogs = Blog::whereNotIn('category', ['hizmet-bolgesi', 'sablon'])->get();
        $projects = Project::all();

        if (!$user) {
            return response()->view('404', compact('projects', 'blogs'), 404);
        } 

        $blogsPaginate = Blog::where('publisher', $user->id)->orderByDesc('created_at')->whereNotIn('category', ['hizmet-bolgesi', 'sablon'])->paginate(6);
        $blogCount = Blog::where('publisher', $user->id)->orderByDesc('created_at')->whereNotIn('category', ['hizmet-bolgesi', 'sablon'])->count();


        if($user) {
            return view('auth.profile', compact('user','blogs','blogsPaginate','blogCount','projects'));
        }

        if ($blogsPaginate->currentPage() > $blogsPaginate->lastPage()) {
            return response()->view('404', compact('projects', 'blogs'), 404);
        }
    }
}
