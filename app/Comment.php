<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
   
    protected $softDelete = true;
    protected $fillable = ['post_id','comment'];

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
