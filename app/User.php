<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function job()
    {
        return $this->hasMany('App\Job');
    }
    public function company()
    {
        return $this->hasMany('App\Company');
    }
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
    public function candidate()
    {
        return $this->hasMany('App\Candidate');
    }
    public function review(){
        return $this->hasMany('App\Review');
    }
    
}
