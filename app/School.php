<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class School extends Model
{
    protected $softDelete = true;
    protected $fillable = ['teacher_id','name'];
}
