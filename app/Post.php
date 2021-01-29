<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    protected $softDelete = true;
    protected $fillable = ['title'];

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    //This Modal for post_video_comment
    public function bothComments()
    {
        return $this->morphMany(BothComment::class, 'commentable');
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
