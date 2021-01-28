<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Phone extends Model
{
    protected $softDelete = true;
    protected $fillable = ['user_id','phone'];

    public function user(){
        return $this->belongsTo(User::class)->withDefault(['No Phone']);
    }
}
