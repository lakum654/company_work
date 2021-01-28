<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $softDelete = true;
    protected $fillable = ['name'];

    public function phone(){
        return $this->hasOne(Phone::class)->withDefault(['phone'=>'No Phone']);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }
}
