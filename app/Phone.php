<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = ['user_id','phone'];

    public function user(){
        return $this->belongsTo(User::class)->withDefault(['No Phone']);
    }
}
