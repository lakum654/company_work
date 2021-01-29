<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Tag extends Model
{
    protected $softDelete = true;
    protected $fillable = ['name'];

    public function posts()
    {
        return $this->morphedByMany(Post::class, 'taggable');
    }
 
    /**
     * Get all of the videos that are assigned this tag.
     */
    public function videos()
    {
        return $this->morphedByMany(Video::class, 'taggable');
    }
}
