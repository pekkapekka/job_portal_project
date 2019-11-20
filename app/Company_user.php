<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Company_user extends Model
{
	use HasRoles;
	protected $guard_name = 'web';
	protected $fillable = ['name', 'email','password'];
     public function job()
    {
    	return $this->hasMany('App\Job');
    }
}
