<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $softDelete = true;
    protected $fillable = ['title'];

    public function bothComments()
    {
        return $this->morphMany(BothComment::class, 'commentable');
    }
}
