<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\User;

class Blog extends Model
{

    public $timestamps = true;
    protected $casts = [
        'publisher' => 'integer',

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'publisher');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function noauthcomments()
    {
        return $this->hasMany(noauthcomments::class);
    }
}
