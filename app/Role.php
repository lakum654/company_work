<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Role extends Model
{
    protected $softDelete = true;
    protected $fillable = ['name'];

    public function users(){
        return $this->belongsToMany(User::class,'role_user');
    }
}
