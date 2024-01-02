<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Noauthcomment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class CommentController extends Controller
{

    //AUTH COMMENT
    public function add(Request $request, $blogId)
    {
        if(Auth::check()){
            $request->validate([
                'comment' => 'required|max:1000|min:4',
            ]);
            if(Auth::user()->role_id != 1){
                $commentCount = $request->session()->get('comment_count', 0);
                if ($commentCount >= 10) {
                    return redirect()->back()->with('error', 'Spam algılandı.');
                }
                $request->session()->put('comment_count', $commentCount + 1);
            }
        
            $userId = Auth::user()->id;
            // Create a new comment instance and populate its attributes
            $comment = new Comment();
            $comment->user_id = $userId;
            $comment->email = Auth::user()->email;
            $comment->comment = $request->input('comment');
            $comment->status = "APPROVED"; // Set default status
            $comment->blog_id = intval($blogId); // Convert $blogId to integer
        
            // Save the comment to the database
            $comment->save();
        
            return redirect()->back()->with('success', 'Yorumunuz eklendi.');
        }
        else{

            $request->validate([
                'name' => 'required|max:40',
                'comment' => 'required|max:1000|min:4',
                'email' => 'email|required|max:40'
            ]);

            $commentCount = $request->session()->get('comment_count', 0);
            if ($commentCount >= 10) {
                return redirect()->back()->with('error', 'Spam algılandı.');
            }
            $request->session()->put('comment_count', $commentCount + 1);

            $noauthcomment = new Noauthcomment();
            $noauthcomment->name = $request->input('name');
            $noauthcomment->comment = $request->input('comment');
            $noauthcomment->email = $request->input('email');
            $noauthcomment->status = "WAITING"; // Set default status
            $noauthcomment->blog_id = intval($blogId); // Convert $blogId to integer
            $noauthcomment->save();

            if ($request->input('comment-cookies-consent') == 'on') {
                // Get the name and email from the request
                $name = $request->input('name');
                $email = $request->input('email');
            
                // Set cookies for name and email with a specified duration (e.g., 1 year)
                $cookieName = cookie('comment_name', $name, 525600); // 525600 minutes = 1 year
                $cookieEmail = cookie('comment_email', $email, 525600);
                
                if(request()->cookie('comment_email') == $email && request()->cookie('comment_name') == $name){
                    return redirect()->back()->with('success', 'Yorumunuzu aldık, onaylandıktan sonra herkese açık olacaktır.');
                }
                return redirect()->back()->cookie($cookieName)->cookie($cookieEmail)->with('success', 'Yorumunuzu aldık, onaylandıktan sonra herkese açık olacaktır.');
            }

            return redirect()->back()->with('success', 'Yorumunuzu aldık, onaylandıktan sonra herkese açık olacaktır.');
        }

    
    }

    public function deleteComment($commentId)
    {
        $comment = Comment::find($commentId);

        $comment = Comment::find($commentId);
        $noAuthComment = NoAuthComment::find($commentId);
    
        // Check if the user is authenticated and has admin role
        if (Auth::check() && Auth::user()->role_id == 1) {
            // User is an admin, proceed with comment deletion
            if ($comment) {
                $comment->delete();
            } elseif ($noAuthComment) {
                $noAuthComment->delete();
            }

            // Add any additional logic or redirect as needed
            return redirect()->back()->with('success', 'Yorum başarıyla silindi.');
        }

        // User is not authorized, handle accordingly
        return redirect()->back()->with('error', 'Bunu yapma yetkiniz yok.');
    }

    
    public function approveComment($commentId)
    {
        $comment = Comment::find($commentId);
        $noAuthComment = NoAuthComment::find($commentId);

        // Check if the user is authenticated and has admin role
        if (Auth::check() && Auth::user()->role_id == 1) {


            if ($comment) {
                $comment->status = 'APPROVED';
                $comment->save();
            } elseif ($noAuthComment) {
                // Assuming 'status' is a field in your noauthcomments table
                $noAuthComment->status = 'APPROVED';
                $noAuthComment->save();
            }

            // Add any additional logic or redirect as needed
            return redirect()->back()->with('success', 'Yorum başarıyla onaylandı.');
        }

        // User is not authorized, handle accordingly
        return redirect()->back()->with('error', 'Unauthorized to approve comment.');
    }
}

