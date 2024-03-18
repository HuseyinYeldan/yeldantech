<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
        $blogs = Blog::whereNotIn('category', ['hizmet-bolgesi', 'sablon'])->get();
        return view('index', compact('pages', 'testimonials', 'reasons', 'projects','blogs'));
    }

    public function notfound() 
    { 
        $pages = Page::all(); 
        $testimonials = Testimonial::all();
        $reasons = Reason::all();
        $projects = Project::all();
        $blogs = Blog::whereNotIn('category', ['hizmet-bolgesi', 'sablon'])->get();
        
        // Return a 404 response with the 404 view
        return response()->view('404', compact('pages', 'testimonials', 'reasons', 'projects', 'blogs'), 404);
    }
    

}
