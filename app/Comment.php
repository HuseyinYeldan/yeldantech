<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\User;

class Comment extends Model
{
    protected $fillable = ['name', 'email', 'comment', 'status', 'user_id', 'blog_id'];

    // Ensure the correct namespace is used for the User model
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id');
    }
}
