<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobtype extends Model
{
    public function job()
    {
    	return $this->hasMany('App\Job');
    }
    public function candidate()
    {
    	return $this->hasMany('App\Candidate');
    }
}
