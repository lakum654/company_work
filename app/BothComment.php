<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class BothComment extends Model
{
    protected $softDelete = true;
    protected $fillable = ['comment'];

    public function commentable()
    {
        return $this->morphTo();
    }
}
