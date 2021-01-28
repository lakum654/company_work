<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class City extends Model
{
    protected $softDelete = true;
    protected $fillable = ['name'];

    public function schools(){
    return $this->hasManyThrough(
    School::class,Teacher::class,
    'city_id','teacher_id','id','id');
    }

    public function teacher(){
        return $this->hasMany(Teacher::class);
    }
}
