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
}
