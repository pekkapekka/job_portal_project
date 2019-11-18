<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    public function jobtype()
    {
    	return $this->belongsTo('App\Jobtype');
    }
    public function gender()
    {
       return $this->belongsTo('App\Gender');
    }
    public function jobassign()
    {
    	return $this->hasMany('App\Jobassign');
    }
}
