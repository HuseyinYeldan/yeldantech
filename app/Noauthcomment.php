<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Noauthcomment extends Model
{
    protected $fillable = ['name', 'email', 'comment', 'status', 'blog_id'];

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id');
    }
}
