<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        "user_id",
        "title",
        "body",
        "slug",
    ];

    /**
     * RELATIONSHIPS
     */
    // user
    public function user()
    {
        return $this->belongsTo("App\User");
    }

    // comments
    public function comments()
    {
        return $this->hasMany("App\Comment");
    }

    // tags
    public function tags()
    {
        return $this->belongsToMany("App\Tag");
    }
}
