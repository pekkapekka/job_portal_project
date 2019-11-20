<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company_user extends Model
{
     public function job()
    {
    	return $this->hasMany('App\Job');
    }
}
