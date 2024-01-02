<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Models\Page;
use App\Testimonial;
use App\Reason;
use App\Project;
use App\Blog;
use App\Message;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    public function index(){
        $pages = Page::all(); 
        $testimonials = Testimonial::all();
        $reasons = Reason::all();
        $projects = Project::all();
        $blogs = Blog::all();
    
        return view('contact', compact('pages', 'testimonials', 'reasons', 'projects','blogs'));
    }

    public function mesaj(Request $request)
    {
        $request->validate([
            'ad' => 'required|max:64|string',
            'telefon' => 'required|max:18|string',
            'mesaj' => 'max:1200|string',
        ]);
        if(Auth::user()->role_id != 1){
            $commentCount = $request->session()->get('comment_count', 0);
            if ($commentCount >= 2) {
                return redirect()->back()->with('error', 'Spam algılandı.');
            }
            $request->session()->put('comment_count', $commentCount + 1);
        }

        $message = new Message(); // Create a new instance
    
        $message->ad = $request->input('ad');
        $message->telefon = $request->input('telefon');
        $message->mesaj = $request->input('mesaj'); // Use input() for text areas
        $message->ip = $request->ip();
    
        $message->save();
    
        return redirect()->back()->with('success', 'Mesaj başarıyla gönderildi!');
    }
    
}
