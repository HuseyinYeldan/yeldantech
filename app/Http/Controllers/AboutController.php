<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;
use App\Testimonial;
use App\Reason;
use App\Faq;
use App\Blog;
use App\Project;


class AboutController extends Controller
{
    public function index(){
        $pages = Page::all();
        $testimonials = Testimonial::all();
        $reasons = Reason::all();
        $faqs = Faq::all();
        $projects = Project::all();
        $blogs = Blog::latest('created_at')
            ->whereNotIn('category', ['hizmet-bolgesi', 'sablon'])
            ->paginate(4);
        return view('about', compact('pages','testimonials','reasons','faqs','blogs','projects'));
    }
}
