<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;
use App\Testimonial;
use App\Reason;
use App\Project;
use App\Blog;

class HomeController extends Controller
{
    public function index()
    {
        $pages = Page::all(); 
        $testimonials = Testimonial::all();
        $reasons = Reason::all();
        $projects = Project::all();
        $blogs = Blog::all();

        return view('index', compact('pages', 'testimonials', 'reasons', 'projects','blogs'));
    }
    public function notfound() 

    { 
        $pages = Page::all(); 
        $testimonials = Testimonial::all();
        $reasons = Reason::all();
        $projects = Project::all();
        $blogs = Blog::all();
        return view('404', compact('pages', 'testimonials', 'reasons', 'projects','blogs')); 
    }

}
