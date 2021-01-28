<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Teacher extends Model
{
    protected $softDelete = true;
    protected $fillable = ['city_id','name'];

    public function school(){
        return $this->hasMany(School::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }
}
