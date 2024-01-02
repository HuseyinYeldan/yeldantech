<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use TCG\Voyager\Models\Post;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use App\User;
use App\Comment;
use Image;
use App\Noauthcomment;

class BlogController extends Controller
{
    public function index($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        $allblogs = Blog::all();
        $blogs = Blog::all();
        $projects = Project::all();
    
        $viewedPosts = Session::get('viewed_posts', []);
        if (!in_array($blog->id, $viewedPosts)) {
            Blog::where('id', $blog->id)->increment('views', 1, ['updated_at' => $blog->updated_at]);
            Session::push('viewed_posts', $blog->id);
        }
    
        // Get approved comments for the blog
        $authorizedComments = $blog->comments->where('status', 'APPROVED');
        // Get non-authorized comments for the blog
        $nonAuthorizedComments = NoAuthComment::where('blog_id', $blog->id)->get();
    
        // Merge both authorized and non-authorized comments
        $allComments = $authorizedComments->merge($nonAuthorizedComments)->sortByDesc('created_at');
        // Filter only approved comments
        $approvedComments = $allComments->filter(function ($comment) {
            return $comment->status == 'APPROVED';
        });
        // Get waiting comments for admin users
        $waitingComments = $allComments->filter(function ($comment) {
            return auth()->check() && auth()->user()->role_id == 1 && $comment->status == 'WAITING';
        });
    
        if ($blog) {
            return view('blog-details', compact('blog', 'allblogs', 'blogs', 'projects', 'approvedComments', 'waitingComments'));
        } else {
            return view('404', compact('projects', 'blogs'));
        }
    }
    
    

    public function blogs()
    {
        $blogs = Blog::latest('created_at')->paginate(7);
        $projects = Project::all();
    
        // Check if the current page is out of bounds
        if ($blogs->currentPage() > $blogs->lastPage()) {
            return view('404', compact('projects', 'blogs'));
        }
    
        return view('blog', compact('blogs', 'projects'));
    }

    public function add(){
        $blogs = Blog::all();
        $projects = Project::all();

        return view('blog-add', compact('blogs','projects'));
    }

    
    public function uploadImage(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,webp|max:4096',
        ]);
        
        $image = $request->file('file');
        $originalName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
        $imageName = $originalName . '_' . time() . '.' . 'webp';
        $imagePath = 'uploads/' . $imageName;
        
        // Convert the uploaded image to WebP format
        $image->storeAs('public', $imagePath);
        $webpImage = Image::make(storage_path("app/public/$imagePath"));
        $webpImage->encode('webp', 90)->save(public_path("storage/$imagePath"));
        
        return response()->json(['link' => asset("storage/$imagePath")]);
        
    }


    public function uploadFile(Request $request)
    {
        try {
            $request->validate([
                'file' => 'required|file|mimes:pdf,doc,docx,zip,rar|max:2048',
            ]);
    
            $file = $request->file('file');
            $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $fileName = $originalName . '_' . time() . '.' . $file->getClientOriginalExtension();

            $filePath = 'uploads/' . $fileName;
    
            // Save the uploaded file
            $file->storeAs('public', $filePath);
    
            return response()->json(['link' => asset("storage/$filePath")]);
        } catch (\Exception $e) {
            // Log the error
            \Log::error($e->getMessage());

            return response()->json(['error' => 'An error occurred during file upload.']);
        }
    }

    public function share(Request $request)
    {
        $user = Auth::user();
    
        $request->validate([
            'baslik' => 'required|string|max:80|min:10',
            'aciklama' => 'required|string|max:155|min:10',
            'blog-thumbnail' => 'required|image|mimes:jpeg,png,jpg,webp|max:4096',
            'content' => 'required|string|max:100000|min:10',
            'slug' => 'required|string|unique:blogs,slug|max:80|min:10',
            'category' => 'required|string|max:40',
        ]);
        
        $thumbnail = $request->file('blog-thumbnail');
        $thumbnailName = Str::slug($request->input('slug')) . '-' . time() . '.' . 'webp';
        $thumbnailPath = 'thumbnails/' . $thumbnailName;
    
        // Convert the uploaded thumbnail to WebP format
        $thumbnail->storeAs('public', $thumbnailPath);
        $webpThumbnail = Image::make(storage_path("app/public/$thumbnailPath"));
        $webpThumbnail->encode('webp', 90)->save(public_path("storage/$thumbnailPath"));
    
        // Create a new blog instance and populate its attributes
        $blog = new Blog();
        $blog->publisher = $user->id; // Assuming 'publisher' is the foreign key column
        $blog->title = $request->input('baslik');
        $blog->excerpt = $request->input('aciklama');
        $blog->image = $thumbnailPath; // Store the thumbnail path in the database
        $blog->content = $request->input('content');
        $blog->category = $request->input('category');
        
        // Transform and set the slug using Str::slug()
        $blog->slug = Str::slug($request->input('slug'));
        
        $blog->save();
    
        // Redirect or return a response as needed
        return redirect()->route('mainpage'); // Adjust the route name accordingly
    }






    
    public function edit($id){
        
        $blogs = Blog::all();
        $projects = Project::all();
        $post = Blog::find($id);

        

        if($post && $post->user->id === Auth::user()->id || $post && Auth::user()->role_id === 1){
            return view('blog-edit', compact('blogs','projects','post'));
        }
        else{
            $projects = Project::all();
            $blogs = Blog::all();

            return view('404', compact('projects','blogs')); 
        }
    }
    

    public function update(Request $request, $id)


    {
        $post = Blog::find($id);

        $request->validate([
            'baslik' => 'required|string|max:80|min:10',
            'aciklama' => 'required|string|max:155|min:10',
            'blog-thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:4096',
            'content' => 'required|string|max:100000|min:10',
            'slug' => [
                'required',
                'string',
                Rule::unique('blogs', 'slug')->ignore($id),
                'max:80',
                'min:10',
            ],
            'category' => 'required|string|max:40',
        ]); 

    
        $post->title = $request->input('baslik');
        $post->excerpt = $request->input('aciklama');
        $post->content = $request->input('content');
        $post->category = $request->input('category');
    
        if ($request->hasFile('blog-thumbnail')) {
            $request->validate([
                'blog-thumbnail' => 'image|mimes:jpeg,png,jpg,webp|max:4096',
            ]);

            $thumbnail = $request->file('blog-thumbnail');
            $thumbnailName = Str::slug($request->input('slug')) . '-' . time() . '.' . 'webp';
            $thumbnailPath = 'thumbnails/' . $thumbnailName;

            $thumbnail->storeAs('public', $thumbnailPath);
            $webpThumbnail = Image::make(storage_path("app/public/$thumbnailPath"));
            $webpThumbnail->encode('webp', 90)->save(public_path("storage/$thumbnailPath"));

            $post->image = $thumbnailPath;
        }
    
        $post->slug = Str::slug($request->input('slug'));
    
        $post->save();
    
        return redirect()->route('mainpage')->with('success', 'Post updated successfully');
    }


    public function destroy($id)
    {
        $post = Blog::find($id);

        // Check if the post with the given ID exists
        if (!$post) {
            return redirect()->back()->with('error', 'Post not found');
        }

        // Check if the authenticated user is authorized to delete the post
        if ((int)$post->publisher !== auth()->user()->id) {
            return redirect()->back()->with('error', 'Unauthorized to delete this post');
        }

        // Delete the post
        $post->delete();

        // Redirect or return a response as needed
        return redirect()->route('mainpage')->with('success', 'Post deleted successfully');
    }

    public function category($category){
        $blogCat = Blog::where('category', $category)->paginate(7);
        $blogs = Blog::all();
        $projects = Project::all();
    
        if ($blogCat->isEmpty()) {
            return view('404', compact('projects', 'blogs'));
        } else {
            return view('blog-categories', compact('category', 'blogCat', 'blogs', 'projects'));
        }
    }



}
